<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gallery</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Scripty -->




        <!-- Styles -->
        <style>
            html, body {
                background-image: url("/img/Index_BG12.jpg");
                background-color: black;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100%;
                margin: 0;
                position: relative;
                min-height: 100%;
                min-width: 100%;
            }
            .header {
                color:white;
                background-color: black;
                border-style: 3px solid black;
                padding-top: 1.2%;
                padding-bottom: 1.2%;
                width: 100%;
                top: 0;
                position: absolute;
                min-width: 100%;
            }
            .footer{
                color:white;
                background-color: black;
                border-style: 3px solid black;
                padding-top: 1.2%;
                padding-bottom: 1.2%;
                width: 100%;
                bottom: 0;
                position: absolute;
                min-width: 100%;
            }

            .full-height {
                //height: 100vh;
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
            .center {
                position: absolute;
                top: 48%;
                left:48%;
                transform: translate(-47%,-50%);
            }
            .container {
                min-height: 100%;
                position: relative;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            /* Lastly, apply responsive CSS fixes as necessary */
            @media (max-width: 767px) {
                #footer {
                    margin-left: -20px;
                    margin-right: -20px;
                    padding-left: 20px;
                    padding-right: 20px;
                }
            }
            a:hover{
                color: red;
                background-color: white;
            }
            a:active {
                color: red;
            }
        </style>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="flex-center position-ref">
                    @if (Route::has('login'))
                    <div align="right" class="links header">
                        @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                        @else
                        <a top-right" onclick="showLogin()" href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                        @endif
                    </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="content center">
                    <div class="title m-b-md" style="color:white; font-weight: 600;">
                        Susis Flowerparadise
                    </div>

                    <div class="links">
                        <a href="https://laravel.com/docs">Articles</a>
                        <a href="https://laracasts.com">Laracasts</a>
                        <a href="https://laravel-news.com">News</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="footer" class="links footer" align="center">
                    <a href="https://laravel.com/docs">Impressum</a>
                    <a href="https://laracasts.com">About</a>
                </div>
            </div>
        </div>
    </body>
</html>