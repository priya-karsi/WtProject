@extends('layouts/main')
@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="class.jpg" alt="Chania">
        <div class="carousel-caption">
          <h3>Annual function 2017-18</h3>
          <p>Hardwork paid!</p>
        </div>
      </div>
  
      <div class="item">
        <img src="r1.jpg" alt="Chicago">
        <div class="carousel-caption">
          <h3>100/100 in maths</h3>
          <p>Refund of fees!</p>
        </div>
      </div>
  
      <div class="item">
        <img src="logo.png" alt="New York">
        <div class="carousel-caption">
          <h3>SGT</h3>
        </div>
      </div>
    </div>
  
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br><br>
  
  
  
  <div class="container">
  <div class="row">
      <div class="col-lg-3 well size">Engineering Maths and Programming!</div>
      
    <div class="col-lg-1"></div>
    
    <div class="col-lg-3 well size">All subjects for SSC and CBSE VIII, IX & X</div>
    
    <div class="col-lg-1"></div>
    
    <div class="col-lg-3 well size">French Language and Training!</div>
  </div>
  </div>
  
  <br>
  <div class="container">
  <div class="row">
      <div style="margin-left:5px; margin-right:15px;" class="col-lg-3 well size2">
      
      <div class="list-group">
      <li class="list-group-item-text">These subjects are taken by Prof. Nitesh Karsi Sir.</li>
       <li class="list-group-item-text">He is the founder of SGT.</li>
       <li class="list-group-item-text">We cover unit test portions of <span style="color:red;">every college</span> on time</li>
     <li class="list-group-item-text">Being a friend is more satisfactory than being a teacher with student!</li>
    
  </div>
    </div>
    
    
    <div class="col-lg-1"></div>
    
    
    <div style="margin-left:0px; margin-right:35px;" class="col-lg-3 well size2">
      <div class="list-group">
      <li class="list-group-item-text">Prof. Nitesh Karsi being the professor of engineering batch observed that the base of students is not that strong.</li>
  
      <li class="list-group-item-text">Thus he thought of starting the school section.</li>
     <li class="list-group-item-text">We aim at <span style="color:red;">building base</span> of each and every student.</li>
      <li class="list-group-item-text">Also to inculcate good values in students from the start is our motive.</li>
  
  </div>
    </div>
    
    
    <div class="col-lg-1"></div>
      
    
    <div style="margin-left:75px; margin-right:10px;" class="col-lg-3 well size2">
    <div class="list-group">
      <li class="list-group-item-text">Prof. XYZ Karsi, the co-ordinator of Podar School takes French training..</li>
    <li class="list-group-item-text">French is one of the most important foreign languages.</li>
    <li class="list-group-item-text">We aim at <span style="color:red;">all the skills</span> of French for the complete training course.</li>
   </div>
    
    
    </div>
    
  </div>
  </div>
@endsection