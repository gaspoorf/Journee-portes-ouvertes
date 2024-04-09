<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JPO IUT</title>
    <link rel="icon" type="image/png" href="{{ asset('fav-usmb.ico') }}">

    <link rel="stylesheet" href="{{ asset('/css/other/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/other/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/layout/header.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/layout/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/pages/home.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/pages/plan.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/components/button.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">


</head>

<body>
@include('layouts.header')
<div class="@yield('navbar-class')">
    @include('layouts.navbar')
</div>


<div class="container">

    @yield('content')

</div>



<script src="{{ asset('/js/popup.js') }}"></script>
<script src="{{ asset('/js/slide.js') }}"></script>
</body>
</html>