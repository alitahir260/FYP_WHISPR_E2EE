@extends('layouts.master')
@section('title')
    @lang('translation.settings')
@endsection
@section('content')
    <!-- Cover Image Section -->
    <div class="position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg profile-setting-img">
            <img src="{{ URL::asset('build/images/profile-bg.jpg') }}" class="profile-wid-img" alt="Cover Image">
            <div class="overlay-content">
                <div class="text-end p-3">
                    <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                        <input id="cover-img-file-input" type="file" class="d-none">
                        <label for="cover-img-file-input" class="btn btn-light">
                            <i class="ri-image-edit-line align-bottom me-1"></i> Change Cover
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile and Edit Section -->
    <div class="row">
        <!-- Profile Picture Section -->
        <div class="col-xxl-3">
            <div class="card mt-n5">
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Profile Picture -->
                        <form action="{{ route('profile.update.avatar') }}" method="POST" enctype="multipart/form-data" id="avatar-form">
                            @csrf
                            <div class="profile-user position-relative mx-auto mb-4">
                                <img src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('build/images/users/avatar-1.jpg') }}"
     class="rounded-circle avatar-xl img-thumbnail" alt="Profile Picture" id="profile-img-preview">

                                <label for="profile-img-file-input" class="avatar-xs profile-photo-edit">
                                    <span class="avatar-title bg-light text-body rounded-circle p-2">
                                        <i class="ri-camera-fill"></i>
                                    </span>
                                </label>
                                <input id="profile-img-file-input" type="file" name="profile_picture" class="d-none" accept="image/*" onchange="previewAndSubmit(event)">
                            </div>
                        </form>
                        <h5 class="fs-16 mb-1">{{ $user->name }}</h5>
                        <p class="text-muted mb-0">Lead Designer / Developer</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Profile Form -->
        <div class="col-xxl-9">
            <div class="card mt-xxl-n5">
                <div class="card-header">
                    <h5 class="card-title">Edit Profile</h5>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        <div class="row">
                            <!-- Name Field -->
                            <div class="col-lg-6 mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="{{ $user->name }}">
                            </div>
                            <!-- Phone Field -->
                            <div class="col-lg-6 mb-3">
                                <label for="phoneInput" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phoneInput" value="{{ $user->phone }}" readonly>
                            </div>
                            <!-- Status Field -->
                            <div class="col-lg-12 mb-3">
                                <label for="status" class="form-label">Status</label>
                                <input type="text" class="form-control" id="statusinput" name="status" placeholder="Enter your status" value="{{ $user->status }}">
                            </div>
                            <!-- Buttons -->
                            <div class="col-lg-12 d-flex justify-content-end gap-2">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <button type="reset" class="btn btn-soft-success">Cancel</button>
                                <a href="{{ route('pin.change') }}" class="btn btn-danger">Change PIN</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Notifications -->
    @if (session('success'))
        <div class="toast-container position-fixed top-0 end-0 p-3">
            <div class="toast align-items-center text-bg-success border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif
    @if ($errors->any())
        <div class="toast-container position-fixed top-0 end-0 p-3">
            <div class="toast align-items-center text-bg-danger border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ $errors->first() }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('script')
    <script>
        // Live Preview and Form Submit
        function previewAndSubmit(event) {
            const reader = new FileReader();
            reader.onload = function () {
                const preview = document.getElementById('profile-img-preview');
                preview.src = reader.result;
                document.getElementById('avatar-form').submit();
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        // Toast Notifications
        document.addEventListener('DOMContentLoaded', function () {
            var toastElList = [].slice.call(document.querySelectorAll('.toast'));
            var toastList = toastElList.map(function (toastEl) {
                return new bootstrap.Toast(toastEl);
            });
            toastList.forEach(toast => toast.show());
        });
    </script>
@endsection
