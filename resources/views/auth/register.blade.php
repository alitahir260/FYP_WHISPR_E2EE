@extends('layouts.master-without-nav')
@section('title')
    @lang('translation.signup')
@endsection
@section('content')
<div class="auth-page-wrapper pt-5">
    <!-- auth page bg -->
    <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
        <div class="bg-overlay"></div>

        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
            </svg>
        </div>
    </div>

    <!-- auth page content -->
    <div class="auth-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-sm-5 mb-4 text-white-50">
                        <div>
                            <a href="index" class="d-inline-block auth-logo">
                                <img src="{{ URL::asset('build/images/whispr-logo.jpg')}}" alt="" height="100">
                            </a>
                        </div>
                        <p class="mt-3 fs-15 fw-medium">Fully End-To-End Encrypted  </p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">
                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">Create an Account!</h5>
                                <p class="text-muted">Sign up to continue to Whispr.</p>
                            </div>
                            <div class="p-2 mt-4">
                                <form action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <!-- Phone Input -->
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" id="phone" name="phone" placeholder="Enter your phone number" required autofocus autocomplete="phone" maxlength="11" pattern="[0-9]{11}" title="Phone number must be 11 digits.">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Create Password Input -->
                                    <div class="mb-3">
                                        <label class="form-label" for="password-input">Create a PIN <span class="text-danger">*</span></label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password" class="form-control pe-5 password-input @error('password') is-invalid @enderror" name="password" placeholder="Create a password" id="password-input" required autocomplete="new-password" pattern="[0-9]{6}" title="Password must be 6 digits long and contain only numbers.">
                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Confirm Password Input -->
                                    <div class="mb-3">
                                        <label class="form-label" for="password_confirmation-input">Confirm PIN <span class="text-danger">*</span></label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password" class="form-control pe-5 password-input @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Confirm your password" id="password_confirmation-input" required autocomplete="new-password">
                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password_confirmation-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="mt-4">
                                        <button class="btn btn-success w-100" type="submit">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="mt-4 text-center">
                        <p class="mb-0">Already have an account? <a href="{{ route('login') }}" class="fw-semibold text-primary text-decoration-underline"> Login </a> </p>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Optional Footer -->
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>
@endsection
@section('script')
<script src="{{ URL::asset('build/libs/particles.js/particles.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/particles.app.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/password-addon.init.js') }}"></script>
@endsection
