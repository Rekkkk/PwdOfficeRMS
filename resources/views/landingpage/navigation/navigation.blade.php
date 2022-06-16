<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <title>PWD OFFICE</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark p-2">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('/img/logo.jpg') }}" style="width:40px;" class="rounded-pill">
            PWD OFFICE
        </a>
        <a class="navbar-brand mb-2" href="{{ route('login') }}">Login</a>
    </nav>
    
    @yield('content')

</body>
</html>