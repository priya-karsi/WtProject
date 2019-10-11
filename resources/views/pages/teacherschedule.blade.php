@extends('layouts.main')
@section('content')
<div class="container">
    <div class="jumbotron">
        <div class="card">
            
        <h1 class="card-header">Today's Schedule:({{ $today }})</h1>
        @for($y = 0;$y < count($lectures);$y++)
            @for($x = 0;$x < count($schedules);$x++)
                @if($schedules[$x]->date == $today && $lectures[$y]->schedule == $schedules[$x]->id)
                <div class="card">
                    <h3 class="card-body">{{ $lectures[$y]->time_in }} To {{ $lectures[$y]->time_out }}</h3>
                    <h4 class="card-footer">Of {{ $schedules[$x]->standard }}<sup>th</sup> Standard</h4>
                    {{-- @unset($schedules[$x]) --}}
                </div>
                @endif
            @endfor
        @endfor
    </div>
</div>
    <div class="card">
        <!-- {{ $salary = 0 }} -->
        <h1 class="card-header">Past Schedules:</h1>
        @for($y = 0;$y < count($lectures);$y++)
            @for($x = 0;$x < count($schedules);$x++)
                @if($schedules[$x]->id == $lectures[$y]->schedule && $schedules[$x]->date != $today)
                    <div class="card">
                    <h1 class="card-header">{{ $schedules[$x]->date }}</h1>
                    <h2 class="card-body">{{ $lectures[$y]->time_in }} To {{ $lectures[$y]->time_out }}</h2>
                    <h3 class="card-footer">Of {{ $schedules[$x]->standard }}<sup>th</sup> Standard</h3>
                    <!--{{ $salary++ }}-->
                </div>
                @endif
            @endfor
        @endfor
    </div>
        <h1>Salary:{{ $mainsalary*$salary }}</h1>
</div>
@endsection