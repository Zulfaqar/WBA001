@extends('layouts.home')
@section('content')
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

@stop
