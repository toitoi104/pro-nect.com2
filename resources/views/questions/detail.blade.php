@extends('layouts.base')

@section('title') {{$question->getTitle()}} @endsection
@section('description') {{$question->getContents()}} @endsection

@php
    use App\Models\Question\Question;
    /** @var Question $question */
@endphp

@section('contents')
    <div>
        <div>
            {{$question->getTitle()}}
        </div>
    </div>
@endsection
