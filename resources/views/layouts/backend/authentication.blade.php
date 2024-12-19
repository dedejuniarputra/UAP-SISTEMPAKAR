<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="shorcut icon" href="{{ asset('assets/favicon/favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('assets/backend/css/themes/lite-purple.min.css') }}">
</head>
<body>

    @yield('content')
    
</body>
</html>