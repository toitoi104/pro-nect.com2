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

            <div class="border border-t my-5"></div>

            @include('common.showContent', ['questionAnswer' => $question])

            <div class="border border-t my-5"></div>

            <div class="text-lg font-bold mt-5 mb-8">回答一覧</div>

            @if(!empty($answers->count()))
                @php $i = 1; @endphp
                @foreach($answers as $answer)
                    <div class="flex mt-5">
                        <div class="hidden sm:block mr-3">
                            <span class="text-lg text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-4 py-2 font-sans">
                                {{$i}}
                            </span>
                        </div>
                        <div class="w-full">
                            @include('common.showContent', ['questionAnswer' => $answer])
                        </div>
                    </div>
                    <div class="flex justify-end py-2">
                        {{$answer->name}}
                    </div>
                    <div class="border border-t my-5"></div>
                    @php $i++ @endphp
                @endforeach
            @else
                <div>まだ回答ありません。回答しましょう！</div>
                <div class="border border-t my-5"></div>
            @endif

            @if(\Illuminate\Support\Facades\Auth::guard('user')->check())
                <div class="text-lg font-bold mt-5 mb-3">あなたの回答</div>
                <button type="button" class="text-xs text-white bg-indigo-600 hover:bg-indigo-700 rounded-sm px-9 py-1 mb-3 font-sans" onclick="insertCode()">
                    Code
                </button>
                <form action="{{route('user.question.answer')}}" method="post">
                    <div>
                        <textarea id="textarea" name="{{\App\Models\Answer\Answer::CONTENTS}}" rows="5" placeholder="回答内容"
                                  class="border border-gray-400 p-1 w-full rounded focus:outline-none focus:border-blue-300"></textarea>
                    </div>

                    <div class="flex justify-end">
                        <button class="text-sm text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-7 py-3 font-sans">回答する</button>
                    </div>
                    <input type="hidden" name="{{\App\Models\Answer\Answer::QUESTION_ID}}" value="{{$question->getId()}}">
                    @csrf
                </form>
            @else
                <div class="flex justify-end">
                    <a href="{{route('login')}}"
                       class="text-sm text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-7 py-3 font-sans">ログインして回答する</a>
                </div>
            @endif

        </div>
    </div>
    <script>
        function insertCode()
        {
            document.getElementById('textarea').value += "<code>" + "\n" + "</code>";
        }
    </script>
@endsection
