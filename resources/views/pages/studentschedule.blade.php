@extends('layouts.main')
@section('content')
     @isset($schedules)
        @if(count($schedules) > 0)
            @for($x = 0;$x < count($schedules);$x++)
                <h1>{{ $schedules[$x]->date }}</h1>
            @endfor
        @endif
     @endisset
@endsection