@extends('layouts.app')

@section('header-assets')
    
<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
@endsection


@section('content')

        <div class="flex items-center flex-center position-ref full-height">

            <div class="content ">
                <div class="title m-b-md text-center text-4xl">
                    ققنوس
                </div>

                <div class="links">
                    {{-- <p>برای استفاده از وب‌سایت از منوی بالای صفحه اقدام به ثبت نام یا ورود به سیستم کنید.</p> --}}

                    <a href="#">قوانین و مقررات</a>
                    <a href="#">تماس با ما</a>
                    <a href="#">درباره‌ی ما</a>
                    <a href="{{ url('login') }}">ورود</a>
                    <a href="{{ url('register') }}">ثبت نام</a>
                </div>
            </div>
        </div>    
@endsection
