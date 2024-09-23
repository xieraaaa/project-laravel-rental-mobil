<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fearshop</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h2>Login</h2>
            @if(session()->has('error_message'))
                    <div class="alert alert-danger">
                        {{ session()->get('error_message') }}
                    </div>
                @endif
                <form method="POST" action="{{ url('login') }}" class="form-control">
                    @csrf
                <div class="input-group">
                <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="input-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Log In</button>
                <br><br>
                <a href="/register" id="reg">Register</a>
            </form>
        </div>
    </div>
</body>
</html>
