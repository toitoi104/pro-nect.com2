<div class="flex-1 flex flex-col">
    <nav class="px-2 flex justify-between bg-white h-12 border-b-2">
        <ul class="flex items-center">
            <li class="">
                <a href="/"><img class="h-12 w-full mx-auto" src="/img/logo/simple_logo.png" alt="logo" /></a>
            </li>
        </ul>

        {{--<ul class="flex items-center">
            <li>
                <h1 class="pl-8 lg:pl-0 text-gray-700">Svelte</h1>
            </li>
        </ul>--}}

        <ul class="flex items-center">
            <li class="">

                @if(Auth::guard('user')->check())
                    <a href="/ask" class="text-xs whitespace-nowrap font-medium text-gray-500 hover:text-gray-900">
                        ログイン
                    </a>
                @else
                    <a href="/login" class="text-xs whitespace-nowrap font-medium text-gray-500 hover:text-gray-900">
                        ログイン
                    </a>
                @endif

            </li>
            <li class="">
                <a href="/register" class="ml-3 whitespace-nowrap inline-flex items-center justify-center px-2 py-1 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                    新規登録
                </a>
            </li>
        </ul>
    </nav>
</div>

