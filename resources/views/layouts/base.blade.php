<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="title" content="@yield('title')">
    <meta name="Description" content="@yield('description')">

    <link rel="icon" type="image/x-icon" href="/img/logo/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/img/logo/apple-touch-icon-180x180.png">

    @if(app()->isProduction())
        <meta name="robots" content="index,follow">
    @else
        <meta name="robots" content="noindex">
    @endif

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-54F6CE173L"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-54F6CE173L');
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-227223657-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-227223657-1');
    </script>

</head>
<body>

@include('layouts.header')

@yield('contents')

@include('layouts.footer')

</body>
</html>
