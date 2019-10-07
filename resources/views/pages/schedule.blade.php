@extends('layouts.main')
@section('content')
<script src="/js/Bootstrap/Select/bootstrap-select.js"></script>

<form method="POST" action="{{ url('/schedule') }}" aria-label="{{ __('Schedule') }}">
    @csrf
    <div class="row">
            <div class="col-md-4">
                    <div class="form-group" >
                            <select class="form-control"  name="standard" id="standard">
                                    <option style="background-color:#d9d5d5; color:#566f90;" value="8">Standard VIII</option>
                                    <option style="background-color:#d9d5d5; color:#566f90;" value="9">Standard IX</option>
                                    <option style="background-color:#d9d5d5; color:#566f90;" value="10">Standard X</option>
                            </select>
                        </div>
            </div>
        </div>
    <div class="form-group row">
            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

            <div class="col-md-6">
                <input id="date" type="date" class="form-control" name="date" required autocomplete="date">
            </div>
    </div>
    <div class="form-group row">
            <label for="time_in" class="col-md-4 col-form-label text-md-right">{{ __('Time_in') }}</label>

            <div class="col-md-6">
                <input id="time_in" type="time" class="form-control" name="time_in" required autocomplete="time_in">
            </div>
    </div>
    <div class="form-group row">
            <label for="time_out" class="col-md-4 col-form-label text-md-right">{{ __('Time_out') }}</label>

            <div class="col-md-6">
                <input id="time_out" type="time" class="form-control" name="time_out" required autocomplete="time_out">
            </div>
    </div>
    <div class="form-group row">
        <label for="no_lecs" class="col-md-4 col-form-label text-md-right">{{ __('Enter the number of lectures :') }}</label>

        <div class="col-md-6">
            <input id="no_lecs" class="form-control" name="no_lecs" required autocomplete="no_lecs" value="0" min="0" max="4" type="number" />
        </div>
</div>
<div class="container">
    <button id="show" type="button" class="btn btn-primary">
        {{ __('Go!') }}
    </button>
    <div id="print"></div>
</div>
    
    
    <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Submit') }}
                </button>
            </div>
    </div>
    <script>
        $(document).ready(function() {
        $("#show").click(function(){
            var no = $("#no_lecs").val();
            console.log(no);
            var i=1;
            for(i = 1; i<=no ; i++)
            {
                var y = document.createElement('LABEL');
                y.setAttribute("for","time_in_"+i);
                y.setAttribute("class","container");
                y.innerHTML="<h1>Lecture "+i+"</h1>";
                document.getElementById("print").appendChild(y);


                var z = document.createElement('LABEL');
                z.setAttribute("for","time_in_"+i);
                z.setAttribute("class","col-md-4 col-form-label text-md-right");
                z.innerHTML="Select Time in "+i;
                document.getElementById("print").appendChild(z);
                var y = document.createElement('INPUT');
                y.setAttribute("type","time");
                y.setAttribute("name","time_in_"+i);
                y.setAttribute("class","col-md-8 form-control");
                document.getElementById("print").appendChild(y);
                
                var z = document.createElement('LABEL');
                z.setAttribute("for","time_in_"+i);
                z.setAttribute("class","col-md-4 col-form-label text-md-right");
                z.innerHTML="Select Time out "+i;
                document.getElementById("print").appendChild(z);
                var y = document.createElement('INPUT');
                y.setAttribute("type","time");
                y.setAttribute("name","time_in_"+i);
                y.setAttribute("class","col-md-8 form-control");
                document.getElementById("print").appendChild(y);
            }
            
        });
        });
    </script>
@endsection