<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Font-Awesome (CSS) -->
    <link rel="stylesheet" href="/vendors/font-awesome/css/all.css" />

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/assets/css/responsive.css" />

    {{-- @vite(['resources/css/app.css']); --}}

</head>

<body>
    <!-- ==================== Scroll-Top Area (Start) ==================== -->
    <a href="#" class="scroll-top">
        <i class="fas fa-long-arrow-alt-up"></i>
    </a>
    <!-- ==================== Scroll-Top Area (End) ==================== -->

    <!-- ==================== Login Area (Start) ==================== -->
    <section class="login staff-login">
        <form class="account-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="icon"><i class="fa-solid fa-user"></i></div>
            <h3>Login</h3>

            <div class="input-field">
                <input type="email" name="email" placeholder="Email" id="email" class="box" />
                <label for="email" class="far fa-envelope"></label>
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2 input-error" />

            <div class="input-field">
                <input type="password" name="password" placeholder="Password" id="password" class="box" />
                <label for="password" class="fas fa-lock"></label>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2 input-error" />

            <div class="info">
                <div class="remember">
                    <input type="checkbox" name="remember" id="remember-me" />
                    <label for="remember-me"> Remember me </label>
                </div>
                <div class="forgot">
                    <a class="link" href="Reset-Password.html">Forgot Password?</a>
                </div>
            </div>
            <button type="submit" class="btn" name="login" id="login-btn">
                Login
            </button>
            <p>
                Don't have an account?
                <a class="link" href="/register">Register</a>
            </p>
        </form>
    </section>

    <!-- Jquery -->
    <script src="/vendors/jquery/jquery-3.6.0.js"></script>

    <!-- Custom Script Files -->
    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/nav-link-toggler.js"></script>
</body>

</html>
