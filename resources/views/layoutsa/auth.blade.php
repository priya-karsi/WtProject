<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
	<style>
		.size{
			font-size:30px;
			font-weight:bold;
			background-color:#566f90;
			color:#d9d5d5;
			text-align:center;
			height:150px;
			margin:15px;
			border-radius:10px;
		}
		.size2{
			font-size:20px;
			background-color:#d9d5d5;
			color:black;
			text-align:center;
			height:350px;
			width:310px;
			border:0px solid #d9d5d5;
			border-radius:30px;
			list-style-position: outside;	
			list-style-type:square;
			padding:20px;
		}
        .n1{
            background-color:#566f90;
            color:#d9d5d5;
            border: 1px solid #d9d5d5;

        }
        </style>

    </head>
    <body>
            <div>
                    <nav style="background-color:#d9d5d5;" class="navbar navbar-expand-sm">
                        <a class="navbar-brand" href="#"><img src="logo.png" alt="noimage.png" width=110px height=100px;></a>
        
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a class="nav-link n1" href="#">Home</a></li>
                                    <li class="nav-item"><a  class="nav-link n1" href="#">About us</a></li>
                    
                @auth('admin')
                            <li><a class="nav-link n1" href="{{ route('schedule.admin') }}">Make Schedule</a></li>
                            <li><a class="nav-link n1" href="#">Register</a></li>
                            <li><a class="nav-link n1" href="#">Send Email</a></li>
                        @endauth
                        @auth('teacher')
                        <li><a class="nav-link n1" href="{{ route('comment') }}">Put Comment/Remarks</a></li>
                        <li><a class="nav-link n1" href="#">View Salary</a></li>
                        <li><a class="nav-link n1" href="#">View Schedule</a></li>
                        @endauth

                        @auth('student')
                        <li><a href="{{ route('schedule.student') }}">View Schedule</a></li>
                        @endauth
                        </ul>
                        @guest('admin')
                            @guest('teacher')
                                @guest('student')
                                
                        <ul class="navbar-nav ml-auto" >
                            <li>
                                    <div class="dropdown">
                                            <button class="btn btn-default dropdown-toggle n1" id="menu1" type="button" data-toggle="dropdown">Log In!
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                              <li class="nav-item" role="presentation"><a class="nav-link n1" role="menuitem" tabindex="-1" href= "{{ route('login.admin') }}">Admin</a></li>
                                              <li role="presentation" class="divider"></li>
                                              <li class="nav-item" role="presentation"><a class="nav-link n1" role="menuitem" tabindex="-1" href="{{ route('login.teacher') }}">Teacher</a></li>
                                              <li role="presentation" class="divider"></li>
                                              <li class="nav-item" role="presentation"><a class="nav-link n1" role="menuitem" tabindex="-1" href="{{ route('login.student') }}">Student</a></li>
                                            </ul>
                                          </div>
                            </li>
                        </ul> 
                            @endguest
                        @endguest
                    @endguest
                        <!-- Right Side Of Navbar -->
                        {{-- <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                           <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Hi There <span class="caret"></span>
                                </a> --}}
                            @auth
                            <ul class="navbar-nav ml-auto">
                                <li>
                                <div class="navbar-nav nav-item navbar-right">
                                    <a class="nav-link n1" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                            @endauth
            </nav>
        </div>
        
    </body>
    </html>
