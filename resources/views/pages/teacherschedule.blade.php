@extends('layouts.main')
@section('content')
<div class="container">
    <div class="jumbotron">
        <h1>Today's Schedule:</h1>
        @for($y = 0;$y < count($lectures);$y++)
            @for($x = 0;$x < count($schedules);$x++)
                @if($schedules[$x]->date == $today && $lectures[$y]->schedule == $schedules[$x]->id)
                    <h1>{{ $schedules[$x]->date }}</h1>
                    <h3>{{ $lectures[$y]->time_in }}</h3> to <h3>{{ $lectures[$y]->time_out }}</h3>
                    Of <h2>{{ $schedules[$x]->standard }}<sup>th</sup> Standard</h2>
                    {{-- @unset($schedules[$x]) --}}
                @endif
            @endfor
        @endfor
    </div>
    <div>
        <h1>Past Schedules:</h1>
        @for($y = 0;$y < count($lectures);$y++)
            @for($x = 0;$x < count($schedules);$x++)
                @if($schedules[$x]->id == $lectures[$y]->schedule && $schedules[$x]->date != $today)
                    <h1>{{ $schedules[$x]->date }}</h1>
                    <h3>{{ $lectures[$y]->time_in }}</h3> to <h3>{{ $lectures[$y]->time_out }}</h3>
                    Of <h2>{{ $schedules[$x]->standard }}<sup>th</sup> Standard</h2>
                    {{-- @unset($schedules[$x]) --}}
                @endif
            @endfor
        @endfor
    </div>
</div>
@endsection