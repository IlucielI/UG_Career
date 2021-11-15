<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UG Career Administrator | Login</title>
    <link href="{{ asset('assets') }}/img/favicongundar.png" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/app.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/auth.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/sweetalert/sweetalert2.min.css">
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <h1 class="auth-title text">Login Administrator.</h1>
                    <p class="auth-subtitle mb-5">UG Career Admin</p>
                    @include('sweetalert::alert')	

                    <!-- <form action="index.html"> -->
                    <form method="POST" action="{{ route('proses_login') }}">
                    @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            @error('login_gagal')
                                {{-- <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong></span> --}}
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    {{-- <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span> --}}
                                    <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                     </button>
                                </div>
                            @enderror                           
                            <!-- <input type="text" class="form-control form-control-xl" placeholder="Username"> -->
                            <input id="username" placeholder="Masukkan Username" type="username" class="form-control form-control-xl @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <!-- <input type="password" class="form-control form-control-xl" placeholder="Password"> -->
                            <input id="password" type="password" placeholder="Password" class="form-control form-control-xl @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror        
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <!-- <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button> -->
                                <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
                                    {{ __('Login') }}
                                </button>

                                <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
                    </form>
                    <!-- <div class="text-center mt-5 text-lg fs-4">
                        <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>
        <script src="{{ asset('assets') }}/vendor/sweetalert/sweetalert.all.js"></script>
	    <script src="{{ asset('assets') }}/sweetalert/sweetalert2.min.js"></script>
    </div>
</body>

</html>
