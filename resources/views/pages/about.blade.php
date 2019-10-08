@extends('layouts/main')
@section('content')
<style>
    .marg{
        border:4px solid black;
    }
</style>
<h1 style="text-align:center ;color:#566f90;">
    <u>Educational Qualifications and Work Profile of our Educators!</u>
</h1>
<br>
    <h2 ><b>Co-Founders of our Educational Institution!</b></h2>
    <br>
    <div class="container">
        <div class="card-columns d-flex justify-content-center">
                <div class="card marg" style="margin-right:100px; margin-left:100px; ">
                        <img class="card-img-top rounded-circle" src="none.png" alt="Card image" height=325px;>
                        <div class="card-body">
                          <h4 class="card-title">Prof. Nitesh Karsi</h4>
                          <p class="card-text"><b>Hello, I am the cofounder of SGT. I have completed my engineering and I have done M.E. from ABC college. I believe in the base foundation of a child.</b></p>
                          <p class="card-footer">Co-Founder</p>
                        </div>
                      </div>
                      

                      <div class="card marg" style="margin-left:100px; margin-right:100px;">
                            <img class="card-img-top rounded-circle" src="none.png" alt="Card image" height=325px;>
                            <div class="card-body">
                              <h4 class="card-title">Prof. Nitesh Karsi</h4>
                              <p class="card-text"><b>Hello, I am the cofounder of SGT. I have completed my engineering and I have done M.E. from ABC college. I believe in the base foundation of a child.</b></p>
                          <p class="card-footer">Co-Founder</p>
                            </div>
                          </div>
            

        </div>

            
    <div class="row">
        <div class="col-md-3 col-lg-3">
                <img src="none.png" class="rounded-circle" style="border: 2px solid black;200px" alt="noimage" width=200px; height=225px; >        
        </div> 
        <div class="col-md-3 col-lg-3 well">
            <h2 style="color:#566f90;" class = "font-weight-bold" ><u>Prof. Nitesh Karsi</u></h2>
            <h4>Co-founder</h4>     
            <p style="color:#566f90; font-size:17px"><b>Hello, I am the cofounder of SGT. I have completed my engineering and I have done M.E. from ABC college. I believe in the base foundation of a child.</b></p>
        </div> 
        
        <div class="col-md-3 col-lg-3">
                <img src="none.png" class="rounded-circle" style="border: 2px solid black; " alt="noimage" width=200px; height=225px; >        
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
                        <img src="none.png" class="rounded-circle" style="border: 2px solid black;200px alt="noimage" width=200px; height=225px; >        
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