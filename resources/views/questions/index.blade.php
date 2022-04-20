@extends('layouts.base')

@section('title') pronect（プロネクト）@endsection
@section('description') pronect（プロネクト）はWEB系プログラミングに特化したQ&amp;Aサイトです。実現したい機能や作業中に発生したエラーについて質問すると、他のエンジニアから回答を得られます。 @endsection

@php
    use App\Models\Question\Question;
    /** @var Question $question */
@endphp

@section('contents')
    <div>
        <div>
            @foreach($questions as $question)
                <div class="border border-l-0 border-r-0 py-3">
                    <div class="flex mx-5">
                        @if($question->isSolved())
                            <span class="text-xs text-white bg-blue-600 rounded-sm px-5 py-1 font-sans">
                                解決済み
                            </span>
                        @else
                            <span class="text-xs text-white bg-gray-500 rounded-sm px-5 py-1 font-sans">
                                受付中
                            </span>
                        @endif

                        <a href="{{route('questions.detail', ['id' => $question->getId()])}}"
                           class="ml-3 font-bold text-blue-500 hover:text-blue-600 cursor-pointer">
                            {{$question->getTitle()}}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
