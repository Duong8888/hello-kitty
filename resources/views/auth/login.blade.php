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
                        <a href="#">
                            <img src="{{asset('assets/img/logo-full.png')}}" alt>
                        </a>
                    </div>
                    <div class="form-col">
                        <div class="login-text-details">
                            <h3>Đăng nhập</h3>
                        </div>
                        <form action="{{route('redirect')}}" method="get">
                            <div class="form-group">
                                <button class="btn newgroup_create btn-block d-block w-100" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24"
                                         style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                        <path
                                            d="M20.283 10.356h-8.327v3.451h4.792c-.446 2.193-2.313 3.453-4.792 3.453a5.27 5.27 0 0 1-5.279-5.28 5.27 5.27 0 0 1 5.279-5.279c1.259 0 2.397.447 3.29 1.178l2.6-2.599c-1.584-1.381-3.615-2.233-5.89-2.233a8.908 8.908 0 0 0-8.934 8.934 8.907 8.907 0 0 0 8.934 8.934c4.467 0 8.529-3.249 8.529-8.934 0-.528-.081-1.097-.202-1.625z"></path>
                                    </svg>
                                    Tiếp tục với Google
                                </button>
                            </div>
                            <div class="text-center dont-have">Bạn chưa có tài khoản? <a
                                    href="{{route('register')}}">Đăng ký</a></div>
                        </form>
                    </div>
                    <div class="back-btn-col text-center">
                        <a href="#"><span><i class="fas fa-caret-left"></i></span> Back</a>
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
