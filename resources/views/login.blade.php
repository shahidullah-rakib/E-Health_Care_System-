<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="images/002-planting.png">
    <title>LogIn</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="log.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/log.css') }}">
</head>

<body>
    <div
        style="margin-left: 565px; margin-top: 130px; margin-bottom: -130px; background-color: #ffe3e6;color: black;  font-size: .9rem; width: 26%; border-radius: 6px;text-align: center">
        @foreach ($errors->all() as $error)
            {{$error}}<br>
        @endforeach

        {{session('msg')}}
    </div>
    <div class="login">
        <h1>Log In</h1>
        <form method="POST">
            <input id="name" type="email" name="email" placeholder="Email..." value="{{old('email')}}"><br>
            <label id="lname" style="font-size: .8rem;color: red;display: none;"></label><br>
            <input id="pass" type="password" name="password" placeholder="Password..."><br>
            <label id="lpass" style="font-size: .8rem;color: red;display: none;"></label><br>
            <a id="forget" href="">Forget password?</a>
            <input id="button" type="submit" name="submit" value="Log In">
        </form>
        <p>Not registerd?<a href="registration.html">Create an account</a></p>
    </div>

</body>

</html>
