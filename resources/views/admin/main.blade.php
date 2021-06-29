<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    {{-- title --}}
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('/flat/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/adminStyle.css') }}">
</head>

<body>
    <div class="container-1">
        @yield('header')
        @yield('navbar')
        @yield('additional')
        @yield('main-content')
    </div>
    @yield('link')

    @yield('js')
</body>

</html>
