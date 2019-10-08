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

        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
	<style>
		.navbar {
         min-height: 100px;
        }
        .navbar-brand {
		padding: 0px;
        padding-right:10px;
		}	
		.navbar-toggle {
		/* (80px - button height 34px) / 2 = 23px */
		margin-top: 23px;
		  padding: 9px 10px !important;
		}
		.navbar-nav > li > a {
			/* (80px - line-height of 27px) / 2 = 26.5px */
			padding-top: 20px;
			padding-bottom: 6px;
			line-height: 8px;
			margin-top:65px;
			margin-bottom:0px;
			background-color:#566f90;
			color:#d9d5d5;
		  }
		  .navbar-custom {
			background-color:#d9d5d5;
		}
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
        </style>

    </head>
    <body>
        <div>
            <nav class="navbar navbar-top navbar-custom">
                    <div class="navbar-header">
                            <a class="navbar-brand" href="#"><img src="logo.png" alt="noimage.png" width=110px height=100px;></a>
                        </div>

                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About us</a></li>
                        @auth('admin')
                            <li><a href="{{ route('schedule.admin') }}">Make Schedule</a></li>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Send Email</a></li>
                        @endauth
                        @auth('teacher')
                        <li><a href="{{ route('comment') }}">Put Comment/Remarks</a></li>
                        <li><a href="#">View Salary</a></li>
                        <li><a href="#">View Schedule</a></li>
                        @endauth

                        @auth('student')
                        <li><a href="{{ route('schedule.student') }}">View Schedule</a></li>
                        @endauth
                        </ul>
                        @guest('admin')
                            @guest('teacher')
                                @guest('student')
                        <ul style="margin-top:65px; margin-right:20px;" class="nav navbar-nav navbar-right">
                            <li>
                                    <div class="dropdown">
                                            <button style="background-color:#566f90" class="btn btn-default dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">Log In!
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                              <li role="presentation"><a role="menuitem" tabindex="-1" href= "{{ route('login.admin') }}">Admin</a></li>
                                              <li role="presentation" class="divider"></li>
                                              <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('login.teacher') }}">Teacher</a></li>
                                              <li role="presentation" class="divider"></li>
                                              <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('login.student') }}">Student</a></li>
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
                                <div class="nav navbar-nav navbar-right">
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            @endauth
            </nav>
        </div>
        
    </body>
    </html>
