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
        <div style="text-align:right;">
        <h1 style="text-align:right; color:#ff6933;" >Today's Schedule: </h1>
        <h6 style="color:#121254">({{ $schedules[$x]->date }})</h6>
        </div>
        @for($y = 0;$y < count($lectures);$y++)
            @if($lectures[$y]->schedule == $schedules[$x]->id)
            {{-- <div class="card">
            <div class="card-body"> --}}
                <h3 style="text-align:right; color:white;">{{ $lectures[$y]->time_in }} - {{ $lectures[$y]->time_out }}</h3>
                @for($z = 0;$z < count($teachers);$z++)
                    @if($teachers[$z]->id == $lectures[$y]->teacher_id)
                    <p style="text-align:right; color:white;"><b>Subject : </b>{{ $teachers[$z]->subject }} </p>   
                {{-- </div> --}}
                    <p style="text-align:right; color:white; font-style:italic;">- By Prof. {{ $teachers[$z]->name }}</p>
                {{-- </div> --}}
                    @endif
                @endfor
            @endif
        @endfor
        <!--{{ $x++ }}-->
    @else
        <!-- {{ $x = 0 }} -->
        <div style="">
        <h3 style="text-align:right; color:white;">No lecture today or yet to be updated</h3>
        </div>
    @endif
    
{{-- </div>
    </div> --}}
     @isset($schedules)
     <div style="text-align:right;">
        <button class="btn btn-default;" id="view"><h1 style="text-align:right; color:#ff6933;">View Past Schedules:</h1></button>
     </div>
        <div style="text-align:right;" id="shown">
        @if(count($schedules) > 0)
            @for(;$x < count($schedules);$x++)
                <h2 style="padding-left:20px; color:#121254" id="show_"+$x>For Day : {{ $schedules[$x]->date }}</h2>
                @for($y = 0;$y < count($lectures);$y++)
                    @if($lectures[$y]->schedule == $schedules[$x]->id)
                    {{-- <div class="card">
                            <div class="card-body"> --}}
                        <h3 style="color:white;">{{ $lectures[$y]->time_in }} - {{ $lectures[$y]->time_out }}</h3>
                        @for($z = 0;$z < count($teachers);$z++)
                            @if($teachers[$z]->id == $lectures[$y]->teacher_id)
                                <p><b>Subject : </b>{{ $teachers[$z]->subject }} </p>
                            
                                <p style="font-style:italic;">- By Prof.{{ $teachers[$z]->name }}</p>
                            
                            @endif
                        @endfor
                    @endif
                @endfor
            @endfor
    <br>
        @endif
</div>
     @endisset
</div>
</div>

<script>
$(document).ready(function(){
    $("#shown").hide();
  $("#view").click(function(){
    $("#shown").slideToggle(3000);
  });
});
</script>
@endsection