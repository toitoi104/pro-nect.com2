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
                    <a href="{{route('user.question')}}" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-3 py-3 font-sans">
                        質問する
                    </a>
                @else
                    <a href="/login" class="text-xs whitespace-nowrap font-medium text-gray-500 hover:text-gray-900">
                        ログイン
                    </a>
                @endif

            </li>
            @if(Auth::guard('user')->check())
                <li class="">
                    <a href="/" class="ml-3 whitespace-nowrap inline-flex items-center justify-center px-2 py-1 border border-transparent rounded-md shadow-sm text-xs font-medium">
                        {{\Auth::guard('user')->user()->getName()}}
                    </a>
                </li>
            @endif
        </ul>
    </nav>
</div>

