<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Get your own code at fontawesome.com-->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image:url( '{{ asset('image/3.jpg') }}' ) ;
                background-repeat: no-repeat;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-style: block;
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
                float: right;
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
                font-size: 50px;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <div class="links"
                style="height: 15px;
                background: #fff; padding: 30px;">
                    <a style="font-size: 22px" class="active" href="#"><i class="fa fa-home"></i></a> 
                    <a style="font-size: 20px" href="#"><i class="fa fa-envelope"></i></a> 
                    <a style="font-size: 20px" href="#"><i class="fa fa-globe"></i></a>
                    <a style="font-size: 20px" href="#"><i class="fa fa-fw fa-user"></i></a>
                    <a style="font-size: 20px" href="#"><i class="fa fa-search"></i></a> 
                </div>
            </tr>
        </table>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Nama : Maulana Alfa R.<br>
                    183140714111039
                </div>
            </div>
        </div>
    </body>
</html>
