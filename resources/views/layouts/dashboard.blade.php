<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.admin.dashboard.head')
</head>
<body>
<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    @include('includes.admin.dashboard.navbar')
</nav>
<div class="container-fluid">
    <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
        @include('includes.admin.dashboard.sidebar')
        </nav>
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
        @yield('content')
        </main>
    </div>
</div>
@include('includes.admin.dashboard.footer')
</body>
</html>