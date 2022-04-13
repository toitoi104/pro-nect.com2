@extends('layouts.base')

@section('title') pronect（プロネクト）@endsection
@section('description') pronect（プロネクト）はWEB系プログラミングに特化したQ&amp;Aサイトです。実現したい機能や作業中に発生したエラーについて質問すると、他のエンジニアから回答を得られます。 @endsection

@section('contents')

    <div class="mb-5">
        <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:px-8 lg:grid-cols-3">
            <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                <div class="mb-12 space-y-4">
                    <h3 class="text-2xl font-semibold text-gray-900">質問一覧</h3>
                    <a href="{{route('questions')}}" class="block font-medium text-purple-600">もっと見る</a>
                </div>
                <img src="https://tailus.io/sources/blocks/end-image/preview/images/graphic.svg" class="w-2/3 ml-auto -mb-12" alt="illustration" loading="lazy" width="900" height="600">
            </div>
        </div>
    </div>

@endsection
