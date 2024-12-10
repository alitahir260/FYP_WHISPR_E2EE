@extends('layouts.master')
@section('title')
    @lang('translation.settings')
@endsection
@section('content')
    <div class="position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg profile-setting-img">
            <img src="{{ URL::asset('build/images/profile-bg.jpg') }}" class="profile-wid-img" alt="">
            <div class="overlay-content">
                <div class="text-end p-3">
                    <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                        <input id="profile-foreground-img-file-input" type="file" class="profile-foreground-img-file-input">
                        <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light">
                            <i class="ri-image-edit-line align-bottom me-1"></i> Change Cover
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-3">
            <div class="card mt-n5">
                <div class="card-body p-4">
                    <div class="text-center">
                        <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                            <img src="@if (Auth::user()->avatar != '') {{ URL::asset('images/' . Auth::user()->avatar) }}@else{{ URL::asset('build/images/users/avatar-1.jpg') }} @endif"
                                class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">
                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                <input id="profile-img-file-input" type="file" class="profile-img-file-input">
                                <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                    <span class="avatar-title rounded-circle bg-light text-body">
                                        <i class="ri-camera-fill"></i>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <h5 class="fs-16 mb-1">Anna Adame</h5>
                        <p class="text-muted mb-0">Lead Designer / Developer</p>
                    </div>
                </div>
            </div>
            <!--end card-->


            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-xxl-9">
            <div class="card mt-xxl-n5">
                <div class="card-header">
                    <h5 class="card-title">Edit Profile</h5>
                </div>
                <div class="card-body p-4">
                    <form action="javascript:void(0);">
                        <div class="row">
                            <!-- Name Field -->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="nameInput" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="nameInput" placeholder="Enter your name" value="Dave Adame">
                                </div>
                            </div>
                            <!-- Locked Phone Field -->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="phoneInput" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="phoneInput" value="+(1) 987 6543" readonly>
                                </div>
                            </div>
                            <!-- PIN Field -->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="pinInput" class="form-label">PIN</label>
                                    <input type="password" class="form-control" id="pinInput" placeholder="Enter your PIN">
                                </div>
                            </div>
                            <!-- Status Field -->
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="statusInput" class="form-label">Status</label>
                                    <textarea class="form-control" id="statusInput" rows="4" placeholder="Enter your description or status here"></textarea>
                                </div>
                            </div>
                            <!-- Submit Buttons -->
                            <div class="col-lg-12">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                    <button type="reset" class="btn btn-soft-success">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!--end col-->
    </div>
    <!--end row-->
@endsection
@section('script')
    <script src="{{ URL::asset('build/js/pages/profile-setting.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
