<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UTG Gold | Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Admin login
                </div>




                <div class="links">
                    <a href="{{ url('/admin/login') }}">Login as Admin</a>
                    <a href="{{ url('/agent/login') }}">Login as Agent</a>
                    <a href="{{ url('/retailer/login') }}">Login as Retailer</a>
                </div>
                <br>
                <div class="links">
                    <a href="#">Create New Admin</a>
                    {{--signup form--}}
                    <form action="/admin/signup" method="post">
                        Name:<br>
                        <input type="text" name="name" placeholder="John Smith"><br>
                        Username:<br>
                        <input type="text" name="username" placeholder="JohnSmith32"><br>
                        Email:<br>
                        <input type="text" name="email" placeholder="JohnSmith@example.com"><br>
                        Password:<br>
                        <input type="password" name="password"><br>
                        Phone:<br>
                        <input type="text" name="phone_number" placeholder="01********"><br>

                        <br><br>
                        <input type="submit" value="Create Admin">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
