@extends('layouts.main')
@section('content')
<style>
    .schedule{
        background-image: url("{{ asset('/storage/bg/s.jpg') }}");
        background-repeat: no-repeat;
        background-size: cover;
        
         background-blend-mode: lighten;
         background-color: rgba(255, 255, 255, 0.1);
    }
</style>
<div class="schedule">


<div class="container" style="padding-top:10px;">
    {{-- <div class="jumbotron">
    <div class="card"> --}}
    @if($flag == 1)
        <!--{{ $x = 0 }}-->
        <h1 style="text-align: right;">Today's Schedule: ({{ $schedules[$x]->date }})</h1>
        
        @for($y = 0;$y < count($lectures);$y++)
            @if($lectures[$y]->schedule == $schedules[$x]->id)
            {{-- <div class="card">
            <div class="card-body"> --}}
                <h3>{{ $lectures[$y]->time_in }} - {{ $lectures[$y]->time_out }}</h3>
                @for($z = 0;$z < count($teachers);$z++)
                    @if($teachers[$z]->id == $lectures[$y]->teacher_id)
                    <p><b>Subject : </b>{{ $teachers[$z]->subject }} </p>   
                {{-- </div> --}}
                    <p class="">By Prof. {{ $teachers[$z]->name }}</p>
                    <hr>
                {{-- </div> --}}
                    @endif
                @endfor
            @endif
        @endfor
        <!--{{ $x++ }}-->
    @else
        <!-- {{ $x = 0 }} -->
        <h1>No lecture today or yet to be updated!</h1>
    @endif
{{-- </div>
    </div> --}}
     @isset($schedules)
     <div>
        <h1>Past Schedules:</h1>
        @if(count($schedules) > 0)
            @for(;$x < count($schedules);$x++)
                <h2 style="padding-left:20px;">For Day-{{ $schedules[$x]->date }}</h2>
                @for($y = 0;$y < count($lectures);$y++)
                    @if($lectures[$y]->schedule == $schedules[$x]->id)
                    {{-- <div class="card">
                            <div class="card-body"> --}}
                        <h3>{{ $lectures[$y]->time_in }} - {{ $lectures[$y]->time_out }}</h3>
                        @for($z = 0;$z < count($teachers);$z++)
                            @if($teachers[$z]->id == $lectures[$y]->teacher_id)
                                <p><b>Subject : </b>{{ $teachers[$z]->subject }} </p>
                            
                                <p class="">By Prof.{{ $teachers[$z]->name }}</p>
                            
                            @endif
                        @endfor
                        
                    @endif
                @endfor
            @endfor
        @endif
</div>
     @endisset
</div>

</div>
@endsection