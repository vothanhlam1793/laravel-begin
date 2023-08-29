
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
<form class="form-signup" method="POST" action="{{ route('register') }}">
    @csrf

    <h1 class="h3 mb-3 font-weight-normal">Đăng ký</h1>

    <label for="inputName" class="sr-only">Tên</label>
    <input type="text" id="inputName" class="form-control" name="name" placeholder="Tên" required autofocus>

    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email" required>

    <label for="inputPassword" class="sr-only">Mật khẩu</label>
    <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Mật khẩu" required>

    <label for="inputPasswordConfirmation" class="sr-only">Nhập lại mật khẩu</label>
    <input type="password" id="inputPasswordConfirmation" class="form-control" name="password_confirmation" placeholder="Nhập lại mật khẩu" required>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng ký</button>
</form>
</div>

</body>
</html>

