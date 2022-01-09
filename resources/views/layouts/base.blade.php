<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=1024">

    <meta name="title" content="@yield('title')">
    <meta name="Description" content="@yield('description')">

    @if(app()->isProduction())
        <meta name="robots" content="index,follow">
    @else
        <meta name="robots" content="noindex">
    @endif

    <link rel="canonical" href="https://pro-nect.com/">

    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

@include('layouts.header')

@yield('contents')

@include('layouts.footer')

</body>
</html>
