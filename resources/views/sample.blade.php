@extends('app')

@section('content')
<div class="title">Sample Page</div>

Escaped - use this one... {{ $firstname }}
<br><br>
Not Escaped - {!! $firstname !!}

@if (1==2)
    <br>yep 1 is 1
@else
    <br>1 is 2
@endif

@unless(1==2)
    <br>unless 1 is 1
@endunless

@if (count($friends))
<h2>my friends</h2>
<ul>
    @foreach($friends as $friend)
        <li>{{ $friend }}</li>
    @endforeach
</ul>
@endif

@stop

@section('footer')
    some extra footer
@stop