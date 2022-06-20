<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="{{ asset('/js/script.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        body {
            margin: 0;
            font-family: "Lato", sans-serif;
        }
        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
          }
        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }
        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }
        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }
        div.content {
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
        }
        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .sidebar a {float: left;}
            div.content {margin-left: 0;}
        }
        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
    </style>
</head>
<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark fixed-top">   
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <img src="{{ asset('/img/logo.jpg') }}" style="width:40px;" class="rounded-pill">
                PWD OFFICE
            </a>
            <li class="nav-item dropdown">
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div style="margin-top: 65px ">
        <div class="sidebar">
            <a class="active" href="{{ route('dashboard') }}">DASHBOARD</a>
            <a href="#news">APPOINTMENT LIST</a>
            <a href="#contact">APPLICATION</a>
            <a href="#about">PWD LIST</a>
            <a href="#about">GENERATE ID</a>
            <a href="#about">PROGRAMS</a>
            <a href="{{ route('account.management') }}">ACCOUNTS   </a>
            <a href="#about">REPORTS</a>
            <a href="{{ route('logout') }}">LOG OUT</a>
        </div>
        <div class="content">
            @yield('content')
        </div>

    </div>
    
</body>
</html>