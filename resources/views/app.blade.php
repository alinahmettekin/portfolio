<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title', 'Portfolio')</title>

</head>

<body class="bg-gradient-to-t from-[#fbc2eb] to-[#a6c1ee] h-full">
    @vite('resources/js/app.js')
    @include('include.header')
    @include('include.menu')
    @include('include.about')
    @include('include.projects')
    @include('include.contact')
    @yield('content')
</body>

</html>