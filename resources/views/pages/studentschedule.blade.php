@extends('layouts.main')
@section('content')
<div class="container" style="padding-top:10px;">
    <div class="jumbotron">
    <div class="card">
    @if($flag == 1)
        <!--{{ $x = 0 }}-->
        <h1 class="card-header">Today's Schedule: ({{ $schedules[$x]->date }})</h1>
        
        @for($y = 0;$y < count($lectures);$y++)
            @if($lectures[$y]->schedule == $schedules[$x]->id)
            <div class="card">
            <div class="card-body">
                <h3>{{ $lectures[$y]->time_in }} - {{ $lectures[$y]->time_out }}</h3>
                @for($z = 0;$z < count($teachers);$z++)
                    @if($teachers[$z]->id == $lectures[$y]->teacher_id)
                    <p><b>Subject : </b>{{ $teachers[$z]->subject }} </p>   
                </div>
                    <p class="card-footer">By Prof. {{ $teachers[$z]->name }}</p>
                    <hr>
                </div>
                    @endif
                @endfor
            @endif
        @endfor
        <!--{{ $x++ }}-->
    @else
        <!-- {{ $x = 0 }} -->
        <h1>No lecture today or yet to be updated!</h1>
    @endif
</div>
    </div>
     @isset($schedules)
     <div class="card">
        <h1 class="card-header">Past Schedules:</h1>
        @if(count($schedules) > 0)
            @for(;$x < count($schedules);$x++)
                <h2 style="padding-left:20px;">For Day-{{ $schedules[$x]->date }}</h2>
                @for($y = 0;$y < count($lectures);$y++)
                    @if($lectures[$y]->schedule == $schedules[$x]->id)
                    <div class="card">
                            <div class="card-body">
                        <h3>{{ $lectures[$y]->time_in }} - {{ $lectures[$y]->time_out }}</h3>
                        @for($z = 0;$z < count($teachers);$z++)
                            @if($teachers[$z]->id == $lectures[$y]->teacher_id)
                                <p><b>Subject : </b>{{ $teachers[$z]->subject }} </p>
                            </div>
                                <p class="card-footer">By Prof.{{ $teachers[$z]->name }}</p>
                            @endif
                        @endfor
                    @endif
                @endfor
            @endfor
        @endif
</div>
</div>
     @endisset
@endsection