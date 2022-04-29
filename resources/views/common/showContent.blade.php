<div>
    @foreach($questionAnswer->getContentsRows() as $row)
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
