@if(!empty($errors->any()))
    <div class="bg-white border border-red-400 text-red-700 px-4 py-3 mb-3 rounded">
        <div class="font-bold">
            <i class="fas fa-exclamation-triangle mr-1"></i>エラー
        </div>
        @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
        @endforeach
    </div>
@endif
