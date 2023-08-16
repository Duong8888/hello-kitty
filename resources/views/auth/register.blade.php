{{--<x-guest-layout>--}}
{{--    <form method="POST" action="{{ route('register') }}">--}}
{{--        @csrf--}}

{{--        <!-- Name -->--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Name')" />--}}
{{--            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--            <x-input-error :messages="$errors->get('name')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Email Address -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Confirm Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--            <x-text-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password_confirmation" required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">--}}
{{--                {{ __('Already registered?') }}--}}
{{--            </a>--}}

{{--            <x-primary-button class="ml-4">--}}
{{--                {{ __('Register') }}--}}
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
                            <img src="assets/img/logo-full.png" alt>
                        </a>
                    </div>
                    <div class="form-col">
                        <div class="login-text-details">
                            <h3>Sign up</h3>
                            <p>Lets get you all setup so you can verify your oersonal account and begin setting up your
                                Profile.</p>
                        </div>
                        <form action="https://dreamschat.dreamguystech.com/template-html/template2/index.html">
                            <div class="form-group">
                                <label>First Name</label>
                                <input class="form-control form-control-lg group_formcontrol" name="first-name"
                                       type="email">
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control form-control-lg group_formcontrol" name="last-name"
                                       type="text">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control form-control-lg group_formcontrol" name="email" type="email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control form-control-lg group_formcontrol" name="password"
                                       type="password">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input class="form-control form-control-lg group_formcontrol" name="c-password"
                                       type="password">
                            </div>
                            <div class="form-group">
                                <label class="custom-check d-flex flex-wrap">
                                    <input type="checkbox">I agreed to all the <a href="#" data-bs-toggle="modal"
                                                                                  data-bs-target="#terms"> Terms &
                                        Conditions,</a><a href="#">Privacy Policy.</a>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="pt-1">
                                <div class="text-center">
                                    <button class="btn newgroup_create btn-block d-block w-100" type="submit">Create
                                        Account
                                    </button>
                                </div>
                            </div>
                            <div class="text-center dont-have">Already have an Account? <a
                                    href="login-email.html">Login</a></div>
                        </form>
                    </div>
                    <div class="back-btn-col text-center">
                        <a href="index.html"><span><i class="fas fa-caret-left"></i></span> Back</a>
                    </div>
                </div>

            </div>
            <div class="login-right signup-bg">
            </div>
        </div>
    </div>


    <div class="modal fade" id="terms">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Terms & Conditions
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span class="material-icons">close</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="terms-card">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum vulputate facilisi eu
                            ultricies integer diam. Eu ullamcorper arcu dui, eget volutpat risus dui. Donec nulla mi
                            neque, egestas tristique non. Vel pellentesque dolor nibh scelerisque turpis. Lacus magna
                            vestibulum, quis aliquam nunc, euismod amet.</p>
                        <p>Aliquet elit sapien orci ipsum faucibus fermentum habitant. Ac quam sit leo posuere nulla
                            dignissim. In mi, velit vitae dictum ac. Suscipit orci, sit amet mi massa gravida lectus
                            elit. Auctor lorem arcu quis commodo nibh ipsum. Lectus amet, ultrices nec amet sed
                            condimentum donec.</p>
                        <p class="mb-0">Arcu sed aenean venenatis arcu in at varius. Elementum, nunc, malesuada pretium
                            cras sed praesent mi arcu urna. Erat maecenas lectus pharetra, blandit lectus.</p>
                    </div>
                    <div class="text-end mt-3 align-items-center">
                        <button type="button" class="btn newgroup_create mb-0 close-btn" data-bs-dismiss="modal"
                                aria-label="Close">
                            Close
                        </button>
                    </div>
                </div>
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
