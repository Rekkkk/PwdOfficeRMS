<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/sidebar.css') }}">
    <title>Document</title>
</head>
<body>
    <!-- <div class="hamburger-menu">
        <ion-icon name="menu-outline" id="hamburger-icon"></ion-icon>
    </div>
    <div class="sidebar" id="sidebars">
        <ul class="links">
            <li class="link">
                <a href="#">
                    <ion-icon name="analytics-outline" class="icon"></ion-icon>Dashboard
                </a>
            </li>
            <li class="link">
                <a href="#">
                    <ion-icon name="analytics-outline" class="icon"></ion-icon>Appointments
                </a>
            </li>
            <li class="link">
                <a href="#">
                    <ion-icon name="eye-outline" class="icon"></ion-icon>Application List
                </a>
            </li>
            <li class="link">
                <a href="#">
                    <ion-icon name="person-outline" class="icon"></ion-icon>PWD List
                </a>
            </li>
            <li class="link">
                <a href="#">
                    <ion-icon name="mail-outline" class="icon"></ion-icon>Generate ID 
                </a>
            </li>
            <li class="link">
                <a href="#">
                    <ion-icon name="key-outline" class="icon"></ion-icon>Programs
                </a>
            </li>
            <li class="link">
                <a href="#">
                    <ion-icon name="settings-outline" class="icon"></ion-icon>Sign Out
                </a>
            </li>
        </ul>
    </div> -->
    @yield('content')
</body>
</html>