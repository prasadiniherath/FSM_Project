<!doctype html>
<html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="/image/sale.jpg" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-7">
                    <!-- @if($errors->any())
                        @foreach ($errors->all() as $error)
                            <h1>{{ $error }}</h1>
                        @endforeach
                    @endif  -->
                    <!-- @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                    @enderror  -->

                        <div class="card-body">
                            <div class="brand-wrapper">
                                <img src="/image/logo1.gif" alt="logo" class="logo">
                            </div>
                            <p class="login-card-description">Sign into your account</p>
                            <form method="POST" action="{{ route('user.loginweb') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $error }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $error }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login">
                            </form>
{{--                            <a href="{{ route('password.request') }}" class="forgot-password-link">Forgot password?</a>--}}
                        </div>
                    </div>
                </div>
            </div>
    </main>
</div>
</body>
</html>
