
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
<form class="form-signin" method="POST" action="{{ route('login') }}">
    @csrf

    <h1 class="h3 mb-3 font-weight-normal">Đăng nhập</h1>

    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email" required autofocus>

    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Mật khẩu" required>

    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Ghi nhớ đăng nhập
        </label>
    </div>
    
    <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>
</form>
</div>

</body>
</html>


