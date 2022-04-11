<!DOCTYPE html>
<html lang="ja" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Content-Style-Type" content="text/css"/>
    <meta http-equiv="Content-Script-Type" content="text/javascript"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5.0">

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
            integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body class="bg-gray-50">
<div class="container w-full sm:w-10/12 mx-auto">
    <div class="w-full">
        <div class="mb-5 px-3 py-3 rounded-lg shadow-lg bg-white">
            <h2 class="text-2xl font-bold mt-3 mb-3">フォント</h2>
            <div class="block sm:flex">
                <div class="m-2 text-xs">
                    <div>文字(text-xs)</div>
                </div>
                <div class="m-2 text-sm">
                    <div>文字(text-sm)</div>
                </div>
                <div class="m-2 text-base">
                    <div>文字(text-base)</div>
                </div>
                <div class="m-2 text-lg">
                    <div>文字(text-lg)</div>
                </div>
                <div class="m-2 text-xl">
                    <div>文字(text-xl)</div>
                </div>
                <div class="m-2 text-2xl">
                    <div>文字(text-2xl)</div>
                </div>
            </div>
            <div class="block sm:flex">
                <div class="m-2 text-xs font-bold">
                    <div>太文字(text-xs)</div>
                </div>
                <div class="m-2 text-sm font-bold">
                    <div>太文字(text-sm)</div>
                </div>
                <div class="m-2 text-base font-bold">
                    <div>太文字(text-base)</div>
                </div>
                <div class="m-2 text-lg font-bold">
                    <div>太文字(text-lg)</div>
                </div>
                <div class="m-2 text-xl font-bold">
                    <div>太文字文字(text-xl)</div>
                </div>
                <div class="m-2 text-2xl font-bold">
                    <div>太文字文字(text-2xl)</div>
                </div>
            </div>
            <div class="block sm:flex">
                <div class="m-2 text-sm text-gray-500">
                    <div>補足説明文文字色</div>
                </div>
                <div class="m-2 text-sm text-red-500">
                    <div>注意文文字色</div>
                </div>
                <div class="m-2 text-sm text-red-500 font-bold">
                    <div>注意文太文字</div>
                </div>
                <div class="m-2 text-sm">
                    <div>文字色</div>
                </div>
            </div>
        </div>{{--フォント--}}

        <div class="mb-5 px-3 py-3 rounded-lg shadow-lg bg-white">
            <h2 class="text-2xl font-bold mt-3 mb-3">ボタン&ラベル(padding)</h2>
            <div class="block sm:flex">
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-1 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-3 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-4 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-5 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-6 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-7 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-8 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-9 font-sans">
                        ボタン
                    </button>
                </div>
            </div>
            <div class="block sm:flex">
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-1 py-1 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-2 py-1 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-3 py-1 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-4 py-1 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-5 py-1 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-6 py-1 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-7 py-1 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-8 py-1 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-9 py-1 font-sans">
                        ボタン
                    </button>
                </div>
            </div>
            <div class="block sm:flex">
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-1 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-2 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-3 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-4 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-5 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-6 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-7 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-8 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
            </div>
            <div class="block sm:flex">
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-1 py-3 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-2 py-3 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-3 py-3 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-4 py-3 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-5 py-3 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-6 py-3 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-7 py-3 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-8 py-3 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-9 py-3 font-sans">
                        ボタン
                    </button>
                </div>
            </div>
        </div>{{--ボタン&ラベル(padding)--}}

        <div class="mb-5 px-3 py-3 rounded-lg shadow-lg bg-white">
            <h2 class="text-2xl font-bold mt-3 mb-3">ボタン&ラベル(横幅固定)</h2>
            <div class="block sm:flex">
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm w-10 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm w-14 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm w-20 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm w-28 font-sans">
                        ボタン
                    </button>
                </div>
            </div>
            <div class="block sm:flex">
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm w-10 py-1 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm w-14 py-1 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm w-20 py-1 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm w-28 py-1 font-sans">
                        ボタン
                    </button>
                </div>
            </div>
            <div class="block sm:flex">
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm w-10 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm w-14 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm w-20 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm w-28 py-2 font-sans">
                        ボタン
                    </button>
                </div>
            </div>
            <div class="block sm:flex">
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm w-10 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm w-14 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm w-20 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm w-28 py-2 font-sans">
                        ボタン
                    </button>
                </div>
            </div>
            <div class="m-2">
                <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm w-1/3 py-2 font-sans">
                    ボタン33%
                </button>
            </div>
            <div class="m-2">
                <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm w-1/2 py-2 font-sans">
                    ボタン50%
                </button>
            </div>
            <div class="m-2">
                <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm w-4/6 py-2 font-sans">
                    ボタン66%
                </button>
            </div>
            <div class="m-2">
                <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm w-full py-2 font-sans">
                    ボタン100%
                </button>
            </div>
            <div class="m-2">
                <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded w-1/2 py-2 font-sans">
                    ボタン50% rounded
                </button>
            </div>
            <div class="m-2">
                <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-lg w-1/2 py-2 font-sans">
                    ボタン50% rounded-lg
                </button>
            </div>
            <div class="m-2">
                <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-full w-1/2 py-2 font-sans">
                    ボタン50% rounded-full
                </button>
            </div>
        </div>{{--ボタン&ラベル(横幅固定)--}}

        <div class="mb-5 px-3 py-3 rounded-lg shadow-lg bg-white">
            <h2 class="text-2xl font-bold mt-3 mb-3">ボタン&ラベル(枠)</h2>
            <div class="block sm:flex">
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-1 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-3 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-4 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-5 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-6 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-7 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-8 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-9 font-sans">
                        ボタン
                    </button>
                </div>
            </div>

            <div class="block sm:flex">
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-1 p-1 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-2 p-1 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-3 p-1 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-4 p-1 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-5 p-1 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-6 p-1 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-7 p-1 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-8 p-1 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-9 p-1 font-sans">
                        ボタン
                    </button>
                </div>
            </div>

            <div class="block sm:flex">
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-1 p-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-2 p-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-3 p-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-4 p-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-5 p-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-6 p-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-7 p-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-8 p-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-9 p-2 font-sans">
                        ボタン
                    </button>
                </div>
            </div>

            <div class="block sm:flex">
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-1 p-3 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-2 p-3 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-3 p-3 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-4 p-3 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-5 p-3 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-6 p-3 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-7 p-3 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-8 p-3 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-600 hover:bg-blue-50 border border-blue-600 rounded-sm px-9 p-3 font-sans">
                        ボタン
                    </button>
                </div>
            </div>
        </div>{{--ボタン&ラベル(枠)--}}

        <div class="mb-5 px-3 py-3 rounded-lg shadow-lg bg-white">
            <h2 class="text-2xl font-bold mt-3 mb-3">ボタン&ラベル(カラー)</h2>
            <div class="block sm:flex">
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-red-600 hover:bg-red-700 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-yellow-600 hover:bg-yellow-700 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-green-600 hover:bg-green-700 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-indigo-600 hover:bg-indigo-700 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-purple-600 hover:bg-purple-700 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-pink-600 hover:bg-pink-700 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-gray-600 hover:bg-gray-700 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
            </div>

            <div class="block sm:flex">
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-red-500 hover:bg-red-600 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-yellow-500 hover:bg-yellow-600 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-green-500 hover:bg-green-600 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-blue-500 hover:bg-blue-600 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-indigo-500 hover:bg-indigo-600 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-purple-500 hover:bg-purple-600 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-pink-500 hover:bg-pink-600 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-white bg-gray-500 hover:bg-gray-600 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
            </div>

            <div class="block sm:flex">
                <div class="m-2">
                    <button type="button" class="text-xs text-red-700 hover:bg-red-50 border border-red-700 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-yellow-700 hover:bg-yellow-50 border border-yellow-700 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-green-700 hover:bg-green-50 border border-green-700 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-blue-700 hover:bg-blue-50 border border-blue-700 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-indigo-700 hover:bg-indigo-50 border border-indigo-700 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-purple-700 hover:bg-purple-50 border border-purple-700 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-pink-700 hover:bg-pink-50 border border-pink-700 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
                <div class="m-2">
                    <button type="button" class="text-xs text-gray-700 hover:bg-gray-50 border border-gray-700 rounded-sm px-9 py-2 font-sans">
                        ボタン
                    </button>
                </div>
            </div>
        </div>{{--ボタン&ラベル(カラー)--}}

        <div class="mb-5 px-3 py-3 rounded-lg shadow-lg bg-white">
            <h2 class="text-2xl font-bold mt-3 mb-3">input(text)</h2>
            <div class="m-1">
                <div>w-20</div>
                <input class="w-20 px-2 py-2 border border-gray-300 rounded-sm focus:outline-none focus:border-blue-400" type="text" name="name" id="email" placeholder="山田　太郎" value="">
            </div>
            <div class="m-1">
                <div>w-40</div>
                <input class="w-40 px-2 py-2 border border-gray-300 rounded-sm focus:outline-none focus:border-blue-400" type="text" name="name" id="email" placeholder="山田　太郎" value="">
            </div>
            <div class="m-1">
                <div>w-64</div>
                <input class="w-64 px-2 py-2 border border-gray-300 rounded-sm focus:outline-none focus:border-blue-400" type="text" name="name" id="email" placeholder="山田　太郎" value="">
            </div>
            <div class="m-1">
                <div>w-full</div>
                <input class="w-full px-2 py-2 border border-gray-300 rounded-sm focus:outline-none focus:border-blue-400" type="text" name="name" id="email" placeholder="山田　太郎" value="">
            </div>
        </div>{{--input(text)--}}

        <div class="mb-5 px-3 py-3 rounded-lg shadow-lg bg-white">
            <h2 class="text-2xl font-bold mt-3 mb-3">input(textarea)</h2>
            <div class="m-1">
                <div>row="5"</div>
                <textarea rows="5" class="border border-gray-400 p-1 w-full rounded focus:outline-none focus:border-blue-300"></textarea>
            </div>
            <div class="m-1">
                <div>row="10"</div>
                <textarea rows="10" class="border border-gray-400 p-1 w-full rounded focus:outline-none focus:border-blue-300"></textarea>
            </div>
            <div class="m-1">
                <div>row="15"</div>
                <textarea rows="15" class="border border-gray-400 p-1 w-full rounded focus:outline-none focus:border-blue-300"></textarea>
            </div>
        </div>{{--input(textarea)--}}

        <div class="mb-5 px-3 py-3 rounded-lg shadow-lg bg-white">
            <h2 class="text-2xl font-bold mt-3 mb-3">input(checkbox)</h2>
            <div class="items-center">
                <div class="mb-1">
                    <label>
                        <input type="checkbox" name="" checked="">
                        <span class="ml-1 text-sm">チェックボックス</span>
                    </label>
                </div>
            </div>
        </div>{{--input(checkbox)--}}

        <div class="mb-5 px-3 py-3 rounded-lg shadow-lg bg-white">
            <h2 class="text-2xl font-bold mt-3 mb-3">input(file)</h2>
            <input type="file" accept="image/*">

            <div class="mt-3">
                <a href="" class="active-link">
                    <i class="far fa-file-alt mr-1"></i>添付ファイル.zip
                </a>
            </div>
        </div>{{--input(file)--}}

        <div class="mb-5 px-3 py-3 rounded-lg shadow-lg bg-white">
            <h2 class="text-2xl font-bold mt-3 mb-3">input(selectbox)</h2>

            <div class="items-center text-gray-900 m-2">
                <div>px-2</div>
                <select class="px-2 py-1 border border-solid border-gray-400 focus:outline-none focus:border-blue-400 hover:border-blue-400">
                    <option value="0">未選択</option>
                    <option value="1">選択肢</option>
                </select>
            </div>

            <div class="items-center text-gray-900 m-2">
                <div>100%</div>
                <select class="w-full px-2 py-1 border border-solid border-gray-400 focus:outline-none focus:border-blue-400 hover:border-blue-400">
                    <option value="0">未選択</option>
                    <option value="1">選択肢</option>
                </select>
            </div>
        </div>{{--input(selectbox)--}}

        <div class="mb-5 px-3 py-3 rounded-lg shadow-lg bg-white">
            <h2 class="text-2xl font-bold mt-3 mb-3">input(radio)</h2>
            <div class="px-2 py-3 border-b border-gray-200 bg-white">
                <div>横</div>
                <div class="flex">
                    <label class="mx-2 flex cursor-pointer">
                        <input class="my-auto transform scale-125" type="radio" name="sex">
                        <div class="title px-2">ラジオA</div>
                    </label>
                    <label class="mx-2 flex cursor-pointer">
                        <input class="my-auto transform scale-125" type="radio" name="sex" checked="">
                        <div class="title px-2">ラジオB</div>
                    </label>
                </div>

                <div>縦</div>
                <div class="block">
                    <label class="mx-2 flex cursor-pointer">
                        <input class="my-auto transform scale-125" type="radio" name="sex">
                        <div class="title px-2">ラジオA</div>
                    </label>
                    <label class="mx-2 flex cursor-pointer">
                        <input class="my-auto transform scale-125" type="radio" name="sex" checked="">
                        <div class="title px-2">ラジオB</div>
                    </label>
                </div>
            </div>
        </div>{{--input(radio)--}}

        <div class="mb-5 px-3 py-3 rounded-lg shadow-lg bg-white">
            <h2 class="text-2xl font-bold mt-3 mb-3">info message</h2>

            <div class="m-2">
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                    <span class="font-bold">
                        <i class="fas fa-exclamation-triangle mr-1"></i>エラー
                    </span>
                    <span class="block sm:inline">電話番号が入力されていません</span>
                </div>
            </div>
            <div class="m-2">
                <div class="bg-white border border-red-400 text-red-700 px-4 py-3 rounded">
                    <span class="font-bold">
                        <i class="fas fa-exclamation-triangle mr-1"></i>エラー
                    </span>
                    <span class="block sm:inline">電話番号が入力されていません</span>
                </div>
            </div>
            <div class="m-2">
                <div class="text-gray-700 bg-red-50 border border-solid border-red-200  px-4 py-3 rounded">
                    <p class="font-bold text-base mb-1">ご利用の際の注意事項</p>
                    <span class="text-sm">注意文です。注意文です。注意文です。</span>
                </div>
            </div>
            <div class="m-2">
                <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded">
                    <span class="font-bold">
                        <i class="fas fa-exclamation-circle mr-1"></i>
                        お知らせ
                    </span>
                    <span class="block sm:inline">通知が100件来ています。</span>
                </div>
            </div>
            <div class="m-2">
                <div class="bg-white border border-yellow-400 text-yellow-700 px-4 py-3 rounded">
                    <span class="font-bold">
                        <i class="fas fa-exclamation-circle mr-1"></i>
                        お知らせ
                    </span>
                    <span class="block sm:inline">通知が100件来ています。</span>
                </div>
            </div>
            <div class="m-2">
                <div class="text-gray-700 bg-yellow-50 border border-solid border-yellow-200  px-4 py-3 rounded">
                    <p class="font-bold text-base mb-1">ご利用の際の注意事項</p>
                    <span class="text-sm">注意文です。注意文です。注意文です。</span>
                </div>
            </div>
            <div class="m-2">
                <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded">
                    <span class="font-bold">
                        <i class="fas fa-star mr-1"></i>
                        重要
                    </span>
                    <span class="block sm:inline">お得案件があります。</span>
                </div>
            </div>
            <div class="m-2">
                <div class="bg-white border border-blue-400 text-blue-700 px-4 py-3 rounded">
                    <span class="font-bold">
                        <i class="fas fa-star mr-1"></i>
                        重要
                    </span>
                    <span class="block sm:inline">お得案件があります。</span>
                </div>
            </div>
            <div class="m-2">
                <div class="text-gray-700 bg-blue-50 border border-solid border-blue-200  px-4 py-3 rounded">
                    <p class="font-bold text-base mb-1">ご利用の際の注意事項</p>
                    <span class="text-sm">注意文です。注意文です。注意文です。</span>
                </div>
            </div>
        </div>{{--info message--}}

        <div class="mb-5 px-3 py-3 rounded-lg shadow-lg bg-white">
            <h2 class="text-2xl font-bold mt-3 mb-3">form</h2>

            <div class="w-full text-sm">
                <div class="lg:flex sm:block">
                    <div class="flex">
                        <div class="px-2 py-3 w-40 border-b border-gray-200">
                            <div class="text-left font-semibold">タイトルタイトル</div>
                        </div>
                        <div class="w-14">
                        </div>
                    </div>
                    <div class="px-2 sm:py-3 border-b border-gray-200 bg-white">
                        <div class="text-gray-900 whitespace-no-wrap">大怪獣対戦</div>
                    </div>
                </div>
                <div class="lg:flex sm:block">
                    <div class="flex">
                        <div class="px-2 py-3 sm:w-40 border-b border-gray-200 bg-white ">
                            <div class="text-left font-semibold">テキスト</div>
                        </div>
                        <div class="w-14 pt-3">
                            <span class="px-2 font-medium bg-blue-600 rounded text-white">必須</span>
                        </div>
                    </div>
                    <div class="px-2 sm:py-3 border-b border-gray-200 bg-white">
                        <div class="text-gray-900 whitespace-no-wrap">
                            <input class="w-full sm:w-40 px-2 py-2 border border-gray-300 rounded-sm focus:outline-none focus:border-blue-400" type="text" name="name" id="email" placeholder="山田　太郎" value="fff">
                        </div>
                        <div class="m-2 text-xs text-gray-500">
                            <div>※補足情報補足情報</div>
                        </div>
                    </div>
                </div>
                <div class="lg:flex sm:block">
                    <div class="flex">
                        <div class="px-2 py-3 sm:w-40 border-b border-gray-200">
                            <div class="text-left font-semibold">セレクトボックス</div>
                        </div>
                        <div class="w-14 pt-3">
                            <span class="px-2 font-medium bg-blue-600 rounded text-white">必須</span>
                        </div>
                    </div>
                    <div class="px-2 sm:py-3 border-b border-gray-200 bg-white">
                        <select class="px-2 py-1 border border-solid border-gray-400 focus:outline-none focus:border-blue-400 hover:border-blue-400">
                            <option value="0">未選択</option>
                            <option value="1">選択肢A</option>
                            <option value="2">選択肢B</option>
                            <option value="3">選択肢C</option>
                        </select>
                    </div>
                </div>
                <div class="lg:flex sm:block">
                    <div class="flex">
                        <div class="px-2 py-3 sm:w-40 border-b border-gray-200">
                            <div class=" text-left font-semibold">テキストエリア</div>
                        </div>
                        <div class="w-14 pt-3">
                            <span class="px-2 font-medium bg-yellow-400 text-gray-700 rounded text-white">任意</span>
                        </div>
                    </div>
                    <div class="px-2 sm:py-3 border-b border-gray-200 bg-white w-full">
                        <div class="text-gray-900 whitespace-no-wrap">
                            <textarea rows="5" class="border border-gray-400 p-1 w-full rounded focus:outline-none focus:border-blue-300"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>{{--form--}}

        <div class="mb-5 px-3 py-3 rounded-lg shadow-lg bg-white">
            <h2 class="text-2xl font-bold mt-3 mb-3">tab</h2>

            <div class="m-3">
                <div class="mb-2">SPは横のまま</div>
                <div class="flex">
                    <button class="text-gray-600 py-2 px-6 block hover:text-blue-500 focus:outline-none text-blue-500 border-t-2 font-medium border-blue-500">
                        案件A
                    </button>
                    <button class="text-gray-600 py-2 px-6 block hover:bg-gray-50 focus:outline-none bg-gray-200">
                        案件B
                    </button>
                    <button class="text-gray-600 py-2 px-6 block hover:bg-gray-50 focus:outline-none bg-gray-200">
                        案件C
                    </button>
                    <button class="text-gray-600 py-2 px-6 block hover:bg-gray-50 focus:outline-none bg-gray-200">
                        案件D
                    </button>
                </div>
            </div>

            <div class="m-3">
                <div class="mb-2">SPで縦になる</div>
                <div class="flex flex-col sm:flex-row">
                    <button class="text-gray-600 py-2 px-6 block hover:bg-gray-50 focus:outline-none text-blue-500 border-l-2 sm:border-l-0 sm:border-t-2 font-medium border-blue-500">
                        案件A
                    </button>
                    <button class="text-gray-600 py-2 px-6 block hover:bg-gray-50 focus:outline-none bg-gray-200">
                        案件B
                    </button>
                    <button class="text-gray-600 py-2 px-6 block hover:bg-gray-50 focus:outline-none bg-gray-200">
                        案件C
                    </button>
                    <button class="text-gray-600 py-2 px-6 block hover:bg-gray-50 focus:outline-none bg-gray-200">
                        案件D
                    </button>
                </div>
            </div>
        </div>{{--tab--}}

        <div class="mb-5 px-3 py-3 rounded-lg shadow-lg bg-white">
            <h2 class="text-2xl font-bold mt-3 mb-3">card</h2>

            <div class="py-16 bg-purple-200">
                <div class="m-auto px-2 text-gray-500 md:px-12 xl:px-0">
                    <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:px-8 lg:grid-cols-3">
                        <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                            <div class="mb-12 space-y-4">
                                <h3 class="text-2xl font-semibold text-gray-900">プロジェクト方式</h3>
                                <p class="mb-6">プロジェクト形式は、仕事内容を掲載してワーカーを募り、応募者の中から選んだ方と契約し仕事を開始する形式です。契約前に応募者のスキルや経歴を確認でき、必要に応じて見積もりを依頼することもできます。</p>
                                <a href="#" class="block font-medium text-purple-600">もっと見る</a>
                            </div>
                            <img src="https://tailus.io/sources/blocks/end-image/preview/images/graphic.svg" class="w-2/3 ml-auto -mb-12" alt="illustration" loading="lazy" width="900" height="600">
                        </div>
                        <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                            <div class="mb-12 space-y-4">
                                <h3 class="text-2xl font-semibold text-gray-900">コンペ方式</h3>
                                <p class="mb-6">コンペ形式は、募集内容に対しての制作物の提案を集めることができる形式です。

                                    ロゴマークやキャッチコピーなど、多くの作品やアイデアを比較検討したい場合に最適です。
                                    集まった提案の中から採用する作品を選び、その作品の提案者に対して報酬が支払われます。</p>
                                <a href="#" class="block font-medium text-purple-600">もっと見る</a>
                            </div>
                            <img src="https://tailus.io/sources/blocks/end-image/preview/images/ui-design.svg" class="w-2/3 ml-auto" alt="illustration" loading="lazy" width="900" height="600">
                        </div>
                        <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                            <div class="mb-12 space-y-4">
                                <h3 class="text-2xl font-semibold text-gray-900">タスク方式</h3>
                                <p class="mb-6">タスク形式は、用意された設問に回答を入力するだけで、クラウドワークス上で作業をすぐに始められる仕事形式です。

                                    回答が承認されると報酬が支払われますが、依頼内容を満たさない回答は非承認となり報酬を得られないこともあります。</p>
                                <a href="#" class="block font-medium text-purple-600">もっと見る</a>
                            </div>
                            <img src="https://tailus.io/sources/blocks/end-image/preview/images/ux-design.svg" class="w-2/3 ml-auto " alt="illustration" loading="lazy" width="900" height="600">
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-8 pb-4 bg-gray-100 lg:flex md:flex justify-center items-center">
                <div class="w-full md:max-w-lg">
                    <div class="bg-white p-7 rounded-lg shadow-lg min-w-full">
                        <div class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">ログイン</div>

                        <div>
                            <input class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:outline-none" type="text" name="loginId" placeholder="メールアドレス（i2iID）">
                            <input class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:outline-none" type="password" name="loginPw" placeholder="パスワード">

                            <input type="hidden" name="cmd" value="login">
                            <input type="hidden" name="act" value="1">
                            <input type="hidden" name="goto" value="https://dev5.craudia.com/login/?goto=https://dev5.craudia.com/?&amp;_ga=1.2.720652338.1649121162&amp;s=1">
                            <input type="hidden" name="rtoken" value="anRaY2hMOTVnM1RrcmhZSXdBMHMxcDdHN0dWSjRpYVVCZ2lnR2Jxa2N5ND0%3D%v2">
                            <input type="hidden" name="failback" value="1">
                        </div>
                        <button type="submit" class="w-full mt-6 bg-blue-600 hover:bg-blue-700 rounded-sm px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">
                            ログイン
                        </button>

                        <div class="text-center p-3">
                            <a class="active-link" href="">パスワードをお忘れですか？</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>{{--card--}}

        {{--https://tailwindcomponents.com/component/create--}}
        <div class="mb-5 px-3 py-3 rounded-lg shadow-lg bg-white">
            <h2 class="text-2xl font-bold mt-3 mb-3">sidebar(SPでは利用しない)</h2>

            <div class="flex">
                <div class="flex w-64 bg-white">
                    <ul>
                        <li class="flex w-48 px-3 py-3 items-center cursor-pointer duration-150 text-sm">
                            <a class="active-link" href="javascript:void(0);" ><i class="fas fa-sync mr-2"></i>ワーカーに切り替え</a>
                        </li>
                        <li class="flex w-48 bg-gray-100 px-3 py-3 items-center cursor-pointer duration-150 text-sm">
                            <i class="fas fa-home text-base w-6 mr-2 text-center text-blue-600"></i>
                            <span class="font-semibold">マイページ</span>
                        </li>
                        <li class="flex w-48 hover:bg-gray-100 px-3 py-2 items-center cursor-pointer duration-150 text-sm">
                            <i class="far fa-address-card w-6 mr-2 text-center text-gray-500"></i>
                            <span class="">案件管理</span>
                        </li>
                        <li class="flex w-48 hover:bg-gray-100 px-3 py-2 items-center cursor-pointer duration-150 text-sm">
                            <i class="fas fa-archive w-6 mr-2 text-center text-gray-500"></i>
                            <span class="">出品管理</span>
                        </li>
                        <li class="flex w-48 hover:bg-gray-100 px-3 py-2 items-center cursor-pointer duration-150 text-sm">
                            <i class="fas fa-user w-6 mr-2 text-center text-gray-500"></i>
                            <span class="">プロフィール</span>
                        </li>
                        <li class="flex w-48 hover:bg-gray-100 px-3 py-2 items-center cursor-pointer duration-150 text-sm flex justify-between" onclick="toggleChildMenu('side-menu-setting')">
                            <div>
                                <i class="fas fa-sliders-v w-6 mr-2 text-center text-gray-500"></i>
                                <span class="">設定</span>
                            </div>
                            <i class="fas fa-angle-down"></i>
                        </li>
                        <li id="side-menu-setting" class="hidden">
                            <ul class="py-1 text-xs text-gray-700 duration-150 ease-in-out">
                                <li>
                                    <a href="#">
                                        <div class="pl-12  py-1 hover:bg-gray-100">基本情報</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pl-12 py-1 hover:bg-gray-100">プロフィール</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pl-12 py-1 hover:bg-gray-100">サムネイル画像</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pl-12 py-1 hover:bg-gray-100">得意カテゴリ</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pl-12 py-1 hover:bg-gray-100">ポートフォリオ</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pl-12 py-1 hover:bg-gray-100">スキル</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pl-12 py-1 hover:bg-gray-100">職歴・資格</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pl-12 py-1 hover:bg-gray-100">本人確認</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pl-12 py-1 hover:bg-gray-100">電話認証</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pl-12 py-1 hover:bg-gray-100">NDAの締結</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pl-12 py-1 hover:bg-gray-100">振込先登録</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pl-12 py-1 hover:bg-gray-100">メール受信設定</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pl-12 py-1 hover:bg-gray-100">ブロックの設定</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pl-12 py-1 hover:bg-gray-100">i2iIDの設定</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class=" min-h-screen w-full bg-gray-50">
                    メインコンテンツ

                </div>
            </div>
        </div>{{-- sidebar --}}

    </div>
</div>

<script>
    function toggleChildMenu(id)
    {
        let menu = document.getElementById(id);

        if(menu.classList.contains('hidden')){
            menu.classList.remove('hidden');
        }else{
            menu.classList.add('hidden');
        }
    }
</script>
</body>
</html>
