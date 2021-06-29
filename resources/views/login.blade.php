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

    <div class="login">
        <h1>Log In</h1>
        <form method="POST" action="/login">
            {{csrf_field()}}
            <input id="name" type="text" name="email" placeholder="Email..."><br>
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
