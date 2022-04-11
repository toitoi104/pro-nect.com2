<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=1024">

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

        @if ($errors->any())
            <div class="flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700" role="alert">
                @foreach ($errors->all() as $error)
                    <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                        <span class="font-medium">{{$error}}</span>
                    </div>
                @endforeach
            </div>
        @endif

        <form class="space-y-6" action="" method="post">
            <h3 class="text-xl font-medium text-gray-900">ログイン</h3>
            <div>
                <label for="email" class="text-sm font-medium text-gray-900 block mb-2">メールアドレス</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@company.com" required="">
            </div>
            <div>
                <label for="password" class="text-sm font-medium text-gray-900 block mb-2">パスワード</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                ログイン
            </button>
            @csrf
        </form>
    </div>
</div>

@include('layouts.footer')

</body>
</html>

