@extends('layouts.main')
@section('content')
<div class="container">
        @if(count($comments) > 0)
        <div class="card">
            @foreach($comments as $c)
            <div class="card-header">
                <h1>Created at : </h1>
                    <h3>{{ $c->created_at}}</h3>
                  </div>
            

            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <h4>{!! $c->comment !!}</h4>
                <footer class="card-footer blockquote-footer"> By <cite title="source title">Prof. {{ $c->teacher_name }}</cite></footer>
                </blockquote>
                </div>
            </div>
            @endforeach
            @endif
                
                

</div>
@endsection