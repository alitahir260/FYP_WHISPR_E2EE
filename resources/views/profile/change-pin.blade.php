@extends('layouts.master')
@section('title', 'Change Password')

@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="card-title">Change Password</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="old_password" class="form-label">Old Password</label>
                <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Enter Old Password" required>
            </div>
            <div class="mb-3">
                <label for="new_password" class="form-label">New Password</label>
                <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Enter New Password" required>
            </div>
            <div class="mb-3">
                <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" placeholder="Confirm New Password" required>
            </div>
            <div class="hstack gap-2 justify-content-end">
                <button type="submit" class="btn btn-primary">Update Password</button>
                <a href="{{ route('profile.settings') }}" class="btn btn-soft-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>

{{-- Success Toast --}}

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
<script src="{{ URL::asset('build/js/pages/change-pin.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection



<script>
    document.addEventListener('DOMContentLoaded', function () {
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function (toastEl) {
            return new bootstrap.Toast(toastEl)
        });
        toastList.forEach(toast => toast.show());
    });
</script>
