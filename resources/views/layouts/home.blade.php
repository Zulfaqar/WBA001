<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    @include('includes.navbar')
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    @include('includes.carousel')
</div>

<div class="container marketing">
    @yield('content')

    <footer>
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017 Usaha Tekad Global Trading &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
            &middot; <a href="{{ url('/admin/') }}">Administrator
        </p>
        @include('includes.footer')
    </footer>
</div>

</body>
</html>