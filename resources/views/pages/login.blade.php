<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
</head>
<body>
    <form action="{{ route('login') }}" method="POST" >
        @csrf
    <label for="email">Email</label><br>
    <input type="email" placeholder="email" id="email" name="email"><br>
    <label for="password">Password</label><br>
    <input type="password" placeholder="password" name="password" id="password" name="password"><br>
    <a href="/register">Don't have an account?</a><br>
    <button type="submit">Login</button>
    </form>
</body>
</html>