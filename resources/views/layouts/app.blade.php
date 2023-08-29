<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your App')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col">
            @yield('header')            
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            @yield('sidebar', @include('parts.sidebar'))
        </div>
        <div class="col-9">
            @yield('content')
        </div>
    </div>
</div>

</body>
</html>
