<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="title" content="新規登録 | pro-nect(プロネクト)">
    <meta name="Description" content="pro-nect(プロネクト)の新規登録画面です">

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

<!-- This is an example component -->
<div class="py-10 flex justify-center">
    <div class="bg-white shadow-md border border-gray-200 rounded-lg w-96 p-4 sm:p-6 lg:p-8">

        <div class="space-y-6">
            <div class="text-xl font-medium text-gray-900 text-center mb-5">ご登録ありがとうございます</div>

            <a href="{{route('login')}}">
                <button class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    ログインする
                </button>
            </a>
            @csrf
        </div>
    </div>
</div>
@include('layouts.footer')

</body>
</html>

