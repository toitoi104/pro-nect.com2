@extends('layouts.base')

@section('title') pronect（プロネクト）@endsection
@section('description') pronect（プロネクト）はWEB系プログラミングに特化したQ&amp;Aサイトです。実現したい機能や作業中に発生したエラーについて質問すると、他のエンジニアから回答を得られます。 @endsection

@section('contents')

    <div class="my-3 mx-3">
        <div class="text-lg font-bold mr-3 mb-3">質問する</div>

        @include('layouts.error.showAllError')

        <form action="{{route('user.question.create')}}" method="post" onsubmit="return false;">
            <div class="flex mb-3">
                <select class="px-2 py-1 border border-solid border-gray-400 focus:outline-none focus:border-blue-400 hover:border-blue-400 mr-3"
                        name="{{\App\Models\Question\Question::TYPE}}">
                    <option>選択してください</option>
                    @foreach(\App\Models\Question\Enum\Type::getStrValues() as $k => $v)
                        <option value="{{$k}}" @if(old(\App\Models\Question\Question::TYPE) === $k)) selected @endif>{{$v}}</option>
                    @endforeach
                </select>

                <button type="button" class="text-xs text-white bg-indigo-600 hover:bg-indigo-700 rounded-sm px-9 py-1 font-sans" onclick="insertCode()">
                    Code
                </button>
            </div>

            <input class="w-full sm:w-1/2 px-2 py-2 mb-3 border border-gray-300 rounded-sm focus:outline-none focus:border-blue-400" type="text" name="title" placeholder="タイトル: プログラミングの勉強方法を教えてください" required>

            <textarea id="textarea" name="{{\App\Models\Question\Question::CONTENTS}}" rows="15" placeholder="質問内容"
                      class="border border-gray-400 p-1 w-full rounded focus:outline-none focus:border-blue-300">{{old(\App\Models\Question\Question::CONTENTS)}}</textarea>

            <div class="flex justify-center">
                <button type="button" onclick="submit();"
                        class="text-xs text-white bg-blue-600 hover:bg-blue-700 rounded-sm px-9 py-3 font-sans">
                    質問する
                </button>
            </div>
            @csrf
        </form>
    </div>

    <script>
        function insertCode()
        {
            document.getElementById('textarea').value += "[code]" + "\n" + "[/code]";
        }
    </script>
@endsection
