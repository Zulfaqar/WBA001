@extends('layouts.admin')
@section('content')
    {{--<div class="flex-center position-ref full-height">--}}
    {{--<div class="content">--}}
    {{--<div class="title m-b-md">--}}
    {{--Admin login--}}
    {{--</div>--}}


    {{--<div class="links">--}}
    {{--<a href="{{ url('/admin/login') }}">Login as Admin</a>--}}
    {{--<a href="{{ url('/agent/login') }}">Login as Agent</a>--}}
    {{--<a href="{{ url('/retailer/login') }}">Login as Retailer</a>--}}
    {{--</div>--}}
    {{--<br>--}}
    {{--<div class="links">--}}
    {{--<a href="#">Create New Admin</a>--}}
    {{--signup form--}}
    {{--<form action="/admin/signup" method="post">--}}
    {{--Name:<br>--}}
    {{--<input type="text" name="name" placeholder="John Smith"><br>--}}
    {{--Username:<br>--}}
    {{--<input type="text" name="username" placeholder="JohnSmith32"><br>--}}
    {{--Email:<br>--}}
    {{--<input type="text" name="email" placeholder="JohnSmith@example.com"><br>--}}
    {{--Password:<br>--}}
    {{--<input type="password" name="password"><br>--}}
    {{--Phone:<br>--}}
    {{--<input type="text" name="phone_number" placeholder="01********"><br>--}}

    {{--<br><br>--}}
    {{--<input type="submit" value="Create Admin">--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    <div class="site-wrapper">

        <div class="site-wrapper-inner">

            <div class="cover-container">

                <div class="masthead clearfix">
                    <div class="inner">
                        <h3 class="masthead-brand">UTG Gold | <small>Administration</small></h3>
                        <nav class="nav nav-masthead">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                            <a class="nav-link active" href="{{url('/admin/')}}">Login</a>
                            <a class="nav-link" href="#">Contact</a>
                        </nav>
                    </div>
                </div>

                <div class="inner cover">
                    <div class="offset-md-3 col-6">

                                    <form action="admin/login" method="post">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="email" class="form-control" id="username"
                                                   aria-describedby="emailHelp"
                                                   placeholder="Enter username">

                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password"
                                                   placeholder="Password">
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Log in</button>
                                        </div>

                                    </form>

                                </div>

                            </div>



                        <div class="mastfoot">
                            <div class="inner">
                                <p>Cover template for <a href="https://getbootstrap.com">Bootstrap</a>, by <a
                                            href="https://twitter.com/mdo">@mdo</a>.</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

@stop
