@extends('layouts.master-without-nav')
@section('title')
    Whispr Connect
@endsection
@section('content')
    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 1440 120">
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
                                    <img src="/build/images/whispr-logo.jpg" alt="" height="100">
                                </a>
                            </div>
                            <p class="mt-3 fs-15 fw-medium">Fully End-To-End Encrypted</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4 bg-dark text-white">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Welcome Back!</h5>
                                    <p class="text-muted">Sign in using the 6-digit code.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    {{-- <form action="" method="POST">
                                    @csrf

                                    <!-- Random 6-digit Code -->
                                    <div class="mb-3 text-center">
                                        <label class="form-label fw-bold">Your 6 Digit Code </label>
                                        <div class="d-flex justify-content-center">
                                            @for ($i = 1; $i <= 6; $i++)
                                                <input type="text" class="form-control text-center mx-1" value="{{ rand(0, 9) }}" readonly style="width: 40px; background-color: #343a40; border: 1px solid #495057; color: #fff;">
                                            @endfor
                                        </div>
                                    </div>

                                    <!-- Enter 6-digit Code -->
                                    <div class="mb-3 text-center">
                                        <label for="code" class="form-label fw-bold">Connect using the 6-digit Code</label>
                                        <div class="d-flex justify-content-center">
                                            @for ($i = 1; $i <= 6; $i++)
                                                <input type="text" class="form-control text-center mx-1" maxlength="1" style="width: 40px;" required>
                                            @endfor
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-primary w-100" type="submit">Connect</button>
                                    </div>
                                </form> --}}
                                    <form action="{{ route('anonymous.chat.connect') }}" method="POST">
                                        @csrf

                                        <!-- Random 6-Digit Code -->
                                        <div class="mb-3 text-center">
                                            <label class="form-label fw-bold">Your 6-Digit Code</label>
                                            <div class="d-flex justify-content-center">
                                                @php
                                                    $generatedCode = str_split((string) ($code ?? ''));
                                                @endphp
                                                <input type="hidden" id="generated-code" value="{{ $code }}">
                                                @foreach ($generatedCode as $digit)
                                                    <input type="text" class="form-control text-center mx-1"
                                                        value="{{ $digit }}" readonly
                                                        style="width: 40px; background-color: #343a40; border: 1px solid #495057; color: #fff;">
                                                @endforeach

                                            </div>
                                        </div>

                                        <!-- Enter 6-Digit Code -->
                                        <div class="mb-3 text-center">
                                            <label class="form-label fw-bold">Enter 6-Digit Code to Connect</label>
                                            <div class="d-flex justify-content-center">
                                                <input type="number" name="connect_code"
                                                    class="form-control text-center mx-1" style="letter-spacing:1rem;"
                                                    required>
                                            </div>
                                        </div>
                                        @error('connect_code')
                                            <div class="text-danger mt-1 text-center">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <div class="mt-4">
                                            <button class="btn btn-primary w-100" type="submit">Connect</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <p class="mb-0">Don't have an account? <a href="{{ route('register') }}"
                                    class="fw-semibold text-primary text-decoration-underline"> Signup </a></p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        © {{ date('Y') }} Whispr
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
@endsection

@section('script')
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script src="/build/libs/particles.js/particles.js"></script>
    <script src="/build/js/pages/particles.app.js"></script>
    <script>
        var generatedCode = document.getElementById('generated-code').value;
        Pusher.logToConsole = true;

        var pusher = new Pusher('9cf0f60100aceaf813ea', {
            cluster: 'ap2'
        });

        var channel = pusher.subscribe('anonymous-chat-connected');
        console.log('generatedCode', generatedCode);

        channel.bind(`anonymous.chat.connected`, function(data) {
            console.log('data', data);
            if (data.code == generatedCode) {
                window.location.href = `/anonymous/chat/${data.chat_code}`;
            }
        });
    </script>
@endsection
