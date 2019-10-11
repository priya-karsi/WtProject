@extends('layouts.main')
@section('content')
<div class="container">
    <div class="jumbotron">
        {{ $comments }}
            @if(count($comments) > 0)
            @foreach($comments as $c)
        <h1>{!! $c->comment !!}</h1>
        @endforeach
        @endif
    </div>
</div>
@endsection