<!DOCTYPE html>
<?php
    $host  = $_SERVER['SERVER_NAME'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Casino</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Casino</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="/css/style.css">

    </head>

    <body>

        <nav class="nav-wrapper">
            <a href="#" class="brand-logo">
                <img src="https://cdn.worldvectorlogo.com/logos/casino-supermarket-logo.svg" alt="Logo" class="logo">
            </a>
            <a href="#" data-target="mobile-links" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a class="sesion" href="./views/login.php">Iniciar Sesión</a></li>
            </ul>
        </nav>


        <ul class="sidenav" id="mobile-links">
            <li><a href="./views/login.php">Iniciar Sesión</a></li>
        </ul>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <script>
            $(document).ready(function () {
                $('.sidenav').sidenav();
            });
        </script>
    </body>

    <header>
        <div class="container">
            <h1>Bienvenido al Casino</h1>
        </div>
    </header>


    </html>