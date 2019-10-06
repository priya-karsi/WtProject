@extends('layouts/main')
@section('content')
<h1 style="text-align:center ;color:#566f90;">
    <u>Educational Qualifications and Work Profile of our Educators!</u>
</h1>
<br>
    <h2 ><b>Co-Founders of our Educational Institution!</b></h2>
    <br>
    <div class="container">
    <div class="row">
        <div class="col-md-3 col-lg-3">
                <img src="none.png" class="img-circle" style="border: 2px solid black;200px alt="noimage" width=200px; height=225px; >        
        </div> 
        <div class="col-md-3 col-lg-3 well">
            <h2 style="color:#566f90;" class = "font-weight-bold" ><u>Prof. Nitesh Karsi</u></h2>
            <h4>Co-founder</h4>     
            <p style="color:#566f90; font-size:17px"><b>Hello, I am the cofounder of SGT. I have completed my engineering and I have done M.E. from ABC college. I believe in the base foundation of a child.</b></p>
        </div> 
        
        <div class="col-md-3 col-lg-3">
                <img src="none.png" class="img-circle" style="border: 2px solid black; " alt="noimage" width=200px; height=225px; >        
        </div> 
        <div class="col-md-3 col-lg-3 well">
                <h2 style="color:#566f90;"><u>Prof. ABC Karsi</u></h2>
            <h4>Co-founder</h4>
                <p style="color:#566f90; font-size:17px"><b>Hello, I am the cofounder of SGT. I have completed my engineering and I have done M.E. from ABC college. I believe in the base foundation of a child.</b></p>          
        </div> 
    </div>
</div>
<h2><b>Educators of our Institution!</b></h2>
    @if(count($teachers) > 0)
        @foreach($teachers as $teacher)
        <div class="row">
                <hr>
                <div class="col-md-1 col-lg-1"></div>
                <div class="col-md-2 col-lg-2">
                        <img src="none.png" class="img-circle" style="border: 2px solid black;200px alt="noimage" width=200px; height=225px; >        
                </div> 
                <div class="col-md-9     col-lg-9 jumbotron">
                    <h2  style="color:#566f90;"><u>Prof. {{ $teacher->name }}</u></h2>
                    <h4>Teacher</h4>     
                <p>{{ $teacher->description }}</p>
                <hr style="border: 1px solid black">
                </div> 
            </div>

        @endforeach
    @else
        <p>No teachers!</p>
    @endif
        </div>
@endsection