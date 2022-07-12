<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>PWD OFFICE</title>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('/img/logo.jpg') }}" style="width:40px;" class="rounded-pill">
            PWD OFFICE
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav" style="margin-left: 70%">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Appointment
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('appointment.new-applicant') }}">New Applicant</a>
                        <a class="dropdown-item" href="{{ route('appointment.renewal') }}">Renewal ID</a>
                        <a class="dropdown-item" href="#">Request Letter</a>
                        <a class="dropdown-item" href="#">Lost ID</a>
                    </div>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </div>  
    </nav>
    <br><br><br>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>