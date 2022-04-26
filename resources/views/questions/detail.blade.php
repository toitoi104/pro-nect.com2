@extends('layouts.base')

@section('title') {{$question->getTitle()}} @endsection
@section('description') {{$question->getContents()}} @endsection

@php
    use App\Models\Question\Question;
    /** @var Question $question */
@endphp

@section('contents')
    <div class="p-2 sm:p-5 bg-gray-100 flex justify-center">
        <div class="bg-white p-5 w-full sm:w-4/5">
            <div class="mb-3 block sm:flex">
                @if($question->isSolved())
                    <span class="text-sm text-white bg-blue-600 rounded-sm px-5 py-1 font-sans">
                        解決済み
                    </span>
                @else
                    <span class="text-sm text-white bg-gray-500 rounded-sm px-5 py-1 font-sans">
                        受付中
                    </span>
                @endif

                <span class="sm:ml-3 ml-3 text-sm text-white bg-blue-500 rounded-sm px-5 py-1 font-sans">
                    {{\App\Models\Question\Enum\Type::getStrValue($question->getType())}}
                </span>

                <div class="my-2 sm:my-0">
                    <span class="sm:ml-3">{{\Carbon\Carbon::parse($question->get)->format('Y-m-d')}}</span>
                </div>
            </div>
            <div class="text-xl font-bold">{{$question->getTitle()}}</div>

            <div class="border border-t my-3"></div>

            <div>
                @foreach($question->getContentsRows() as $row)
                    @if(preg_match("/\<code\>/", $row))
                        <div class="text-white bg-gray-700 p-3">
                        <code>
                    @elseif(preg_match("/\<\/code\>/", $row))
                        </code>
                        </div>
                    @elseif(empty($row))
                        <br>
                    @else
                        {!! nl2br(e($row)) !!}
                    @endif
                @endforeach
            </div>

            <div class="border border-t my-3"></div>

            @if(\Illuminate\Support\Facades\Auth::guard('user')->check())
                <div class="flex justify-end">
                    <button class="text-sm text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-7 py-3 font-sans">回答する</button>
                </div>
            @else
                <div class="flex justify-end">
                    <a href="{{route('login')}}"
                       class="text-sm text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-7 py-3 font-sans">ログインして回答する</a>
                </div>
            @endif

        </div>
    </div>
@endsection
