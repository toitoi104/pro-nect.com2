@extends('layouts.base')

@section('title') pronect（プロネクト）@endsection
@section('description') pronect（プロネクト）はWEB系プログラミングに特化したQ&amp;Aサイトです。実現したい機能や作業中に発生したエラーについて質問すると、他のエンジニアから回答を得られます。 @endsection

@php
    use App\Models\Question\Question;
    /** @var Question $question */
@endphp

@section('contents')
    質問の一覧がpaginationで出てくる

    @foreach($questions as $question)
        <div>{{$question->getTitle()}}</div>
    @endforeach
@endsection
