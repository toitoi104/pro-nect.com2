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
            <div class="my-2">
                {{ $questions->links() }}
            </div>

            @foreach($questions as $question)
                <div class="border border-l-0 border-r-0 py-3 mx-5">
                    <div class="flex w-full">
                        <div class="mr-2 whitespace-nowrap">
                            @if($question->isSolved())
                                <span class="text-xs text-white bg-blue-600 rounded-sm px-5 py-1 font-sans">
                                    解決済み
                                </span>
                            @else
                                <span class="text-xs text-white bg-gray-500 rounded-sm px-5 py-1 font-sans">
                                    受付中
                                </span>
                            @endif

                            <div class="text-center">
                                <div class="text-2xl py-1">
                                    {{$question->count ?? 0}}
                                </div>
                                <div class="text-xs ">回答</div>
                            </div>
                        </div>

                        <div class="w-full">
                            <div>
                                <a href="{{route('questions.detail', ['id' => $question->getId()])}}"
                                   class="text-lg ml-3 font-bold text-blue-500 hover:text-blue-600 cursor-pointer">
                                    {{$question->getTitle()}}
                                </a>
                            </div>
                            <div>
                                <div class="flex justify-end">{{$question->name}}</div>
                                <div class="flex justify-end">
                                    {{\Carbon\Carbon::parse($question->getCreatedAt())->format('Y/m/d')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
