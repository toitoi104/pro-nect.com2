@extends('layouts.base')

@section('title') pronect（プロネクト）@endsection
@section('description') pronect（プロネクト）はWEB系プログラミングに特化したQ&amp;Aサイトです。実現したい機能や作業中に発生したエラーについて質問すると、他のエンジニアから回答を得られます。 @endsection

@section('contents')

    <div class="py-5 bg-gray-100">

        <div class="mx-2 sm:mx-12 mb-5 text-lg font-bold sm:flex sm:justify-center">
            <p>Pronectには、プログラミング・エンジニアに関する質問、回答が集まっています。あなたの疑問をPronectで解決しましょう。</p>
        </div>

        <div class="sm:mx-auto sm:mx-12 w-full sm:w-1/3 grid gap-6 px-2 my-5">
            <a href="{{route('questions')}}" class="block font-medium text-purple-600">
                <div class="flex justify-between bg-white hover:bg-gray-100 rounded-2xl shadow-xl px-8 py-6 sm:px-12">
                    <div class="">
                        <h3 class="text-2xl font-semibold text-gray-900">質問一覧</h3>
                    </div>
                    <img src="https://tailus.io/sources/blocks/end-image/preview/images/graphic.svg"
                         class="w-20" alt="illustration" loading="lazy" width="900" height="600">
                </div>
            </a>
        </div>

        <div class="block sm:flex sm:justify-center px-2 sm:px-10">
            <div class="sm:mx-auto sm:mx-12 w-full sm:w-1/4 grid gap-6 sm:mx-2 my-2 sm:my-0">
                <a href="{{route('questions')}}" class="block font-medium text-purple-600">
                    <div class="text-center bg-white hover:bg-gray-100 rounded-2xl shadow-xl px-8 py-6 sm:px-12">
                        <div class="text-center">
                            <h3 class="text-2xl font-semibold text-gray-900">ユーザー数</h3>
                            <span class="text-2xl font-bold">{{$userCount}}</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="sm:mx-auto sm:mx-12 w-full sm:w-1/4 grid gap-6 sm:mx-2 my-2 sm:my-0">
                <a href="{{route('questions')}}" class="block font-medium text-purple-600">
                    <div class="text-center bg-white hover:bg-gray-100 rounded-2xl shadow-xl px-8 py-6 sm:px-12">
                        <div class="text-center">
                            <h3 class="text-2xl font-semibold text-gray-900">質問数</h3>
                            <span class="text-2xl font-bold">{{$questionCount}}</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="sm:mx-auto sm:mx-12 w-full sm:w-1/4 grid gap-6 sm:mx-2 mx-2 my-2 sm:my-0">
                <a href="{{route('questions')}}" class="block font-medium text-purple-600">
                    <div class="text-center bg-white hover:bg-gray-100 rounded-2xl shadow-xl px-8 py-6 sm:px-12">
                        <div class="text-center">
                            <h3 class="text-2xl font-semibold text-gray-900">回答数</h3>
                            <span class="text-2xl font-bold">{{$answerCount}}</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection
