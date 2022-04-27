@extends('layouts.base')

@section('title') pronect（プロネクト）@endsection
@section('description') pronect（プロネクト）はWEB系プログラミングに特化したQ&amp;Aサイトです。実現したい機能や作業中に発生したエラーについて質問すると、他のエンジニアから回答を得られます。 @endsection

@section('contents')

    <div class="py-5 bg-gray-100">
        <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full px-2 lg:px-8 my-2 sm-my-0">
            <a href="{{route('questions')}}" class="block font-medium text-purple-600">
                <div class="flex justify-between bg-white hover:bg-gray-100 rounded-2xl shadow-xl px-8 py-6 sm:px-12 lg:px-8">
                    <div class="mb-12 space-y-4">
                        <h3 class="text-2xl font-semibold text-gray-900">質問一覧</h3>
                    </div>
                    <img src="https://tailus.io/sources/blocks/end-image/preview/images/graphic.svg"
                         class="w-20" alt="illustration" loading="lazy" width="900" height="600">
                </div>
            </a>
        </div>
    </div>

@endsection
