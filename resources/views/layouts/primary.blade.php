<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bohdan Karadzhian</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('font-mfizz-2.4.1/font-mfizz.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/486ca9e286.js"></script>
</head>
<body>
<header class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img class="logolink" src="{{ asset('img/logo_f.svg') }}" alt="loading...">
                Bohdan Karadzhian
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">blog</a></li>
                <li><a href="/about">about me</a></li>
                <li><a href="#">contacts</a></li>
            </ul>
        </div>
    </div>
</header>
<div class="wrap">
    <div class="content">
        <div class="container">
            @yield('content')
        </div>
    </div>
<footer>
    <div class="container">
        <div class="social-links">
            <a href="https://vk.com/bogdankaradjan" target="_blank"><i class="fa fa-vk"></i></a>
            <a href="https://www.facebook.com/bogdan.karadzhyan" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/karic_z1/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
        <p>This is the personal site of Bohdan Karadzhian</p>
        <p>All rights reserved &copy; 2017</p>
    </div>
</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>