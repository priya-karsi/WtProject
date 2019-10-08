@extends('layouts.main')
@section('content')
<div class="container" style="padding-top:10px;">
    <div class="jumbotron">
    @if($flag == 1)
        <!--{{ $x = 0 }}-->
        <h1>Today's Schedule:</h1>
        <h3>{{ $schedules[$x]->date }}</h3>
        @for($y = 0;$y < count($lectures);$y++)
            @if($lectures[$y]->schedule == $schedules[$x]->id)
                <p>{{ $lectures[$y]->time_in }} to {{ $lectures[$y]->time_out }}</p>
                @for($z = 0;$z < count($teachers);$z++)
                    @if($teachers[$z]->id == $lectures[$y]->teacher_id)
                        <p>By {{ $teachers[$z]->name }}</p>
                    @endif
                @endfor
            @endif
        @endfor
        <!--{{ $x++ }}-->
    @else
        {{ $x = 0 }}
    @endif
    </div>
     @isset($schedules)
     <div class="">
        <h1>Past Schedules:</h1>
        @if(count($schedules) > 0)
            @for(;$x < count($schedules);$x++)
                <h1>{{ $schedules[$x]->date }}</h1>
                @for($y = 0;$y < count($lectures);$y++)
                    @if($lectures[$y]->schedule == $schedules[$x]->id)
                        <p>{{ $lectures[$y]->time_in }} to {{ $lectures[$y]->time_out }}</p>
                        @for($z = 0;$z < count($teachers);$z++)
                            @if($teachers[$z]->id == $lectures[$y]->teacher_id)
                                <p>By {{ $teachers[$z]->name }}</p>
                            @endif
                        @endfor
                    @endif
                @endfor
            @endfor
        @endif
     </div>
</div>
     @endisset
    <div class="calendar"></div>
    <script>
        $('.calendar').calendar();
    </script>
@endsection