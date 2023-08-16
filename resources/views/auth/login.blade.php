{{--<x-guest-layout>--}}
{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('login') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">--}}
{{--                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}

{{--            <x-primary-button class="ml-3">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
    <!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamschat.dreamguystech.com/template-html/template2/login-email.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Aug 2023 04:45:31 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dreams Chat - Html Template</title>

    <link rel="icon" href="{{asset('assets/img/favicon.png')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/plugins/mcustomscroll/jquery.mCustomScrollbar.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
</head>
<body class="account-page">

<div class="main-wrapper">

    <div class="content align-items-center">
        <div class="w-100 ">
            <div class="login-left">

                <div class="account-content">
                    <div class="login-header">
                        <a href="index.html">
                            <img src="{{asset('assets/img/logo-full.png')}}" alt>
                        </a>
                    </div>
                    <div class="form-col">
                        <div class="login-text-details">
                            <h3>Log in</h3>
                            <p>Login with your Data that you entered during your Registration</p>
                        </div>
                        <form action="https://dreamschat.dreamguystech.com/template-html/template2/index.html">
                            <div class="form-group">
                                <label>Your Email</label>
                                <input class="form-control form-control-lg group_formcontrol" name="email" type="email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control form-control-lg group_formcontrol" name="password"
                                       type="text">
                            </div>
                            <div class="form-group">
                                <label class="custom-check d-flex">
                                    <input type="checkbox">Keep me logged in
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="pt-1">
                                <div class="text-center">
                                    <button class="btn newgroup_create btn-block d-block w-100" type="submit">Login
                                    </button>
                                </div>
                            </div>
                            <div class="text-center dont-have">Don’t have an account? <a
                                    href="signup-email.html">Signup</a></div>
                            <div class="text-center mt-3">
<span class="forgot-link">
<a href="forgotpassword-email.html" class="text-end">Forgot Password ?</a>
</span>
                            </div>
                        </form>
                    </div>
                    <div class="back-btn-col text-center">
                        <a href="index.html"><span><i class="fas fa-caret-left"></i></span> Back</a>
                    </div>
                </div>

            </div>
            <div class="login-right">
            </div>
        </div>
    </div>

</div>


<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('assets/plugins/mcustomscroll/jquery.mCustomScrollbar.js')}}"></script>

<script src="{{asset('assets/js/script.js')}}"></script>
</body>

<!-- Mirrored from dreamschat.dreamguystech.com/template-html/template2/login-email.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Aug 2023 04:45:35 GMT -->
</html>
