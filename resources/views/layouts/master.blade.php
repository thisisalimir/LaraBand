<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>LaraBand</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
<div id="app">
@include('layouts.header')
<!-- Page content -->
    <div class="w3-content" style="max-width:2000px;margin-top:46px">
        {{--Declare View Data--}}
        <router-view></router-view>
    </div>

    @include('layouts.footer')

</div>
<script src="/js/app.js"></script>
</body>
</html>
