<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @yield('css')
    @yield('js')

</head>
<body>

<div class="jumbotron text-center">
    <h1>Header</h1>
    <p>Resize this responsive page to see the effect!</p>
    <a href="/">Home</a>
    <a href="/aboutus">About Us</a>
    @yield('header')
</div>

<div class="container">
    <div class="row">

        @section('sidebar')
        <div class="col-m-4">

        </div>
        @show

        @section('content')
        <div class="col-sm-8">
            <h1>Slider</h1>
            <br>
            <br>
            <hr>
            <h3>Content</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
            @show

    </div>
</div>
<div class="jumbotron text-center">
    <h1>Footer</h1>
    <p>Sayfa altı</p>
    @yield('footer')
</div>
</body>
</html>
