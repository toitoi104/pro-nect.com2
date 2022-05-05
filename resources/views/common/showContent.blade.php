<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js?skin=sunburst"></script>

<div>
@foreach($questionAnswer->getContentsRows() as $row)
    @if(preg_match("/\[code\]/", $row))
<div class="">
    <code>
<pre class="prettyprint p-3">
    @elseif(preg_match("/\[\/code\]/", $row))
</pre>
    </code>
</div>
    @elseif(empty($row))
<br>
    @else
{!! $row !!}
    @endif
@endforeach
</div>
