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
        font-family: Georgia, 'Times New Roman', Times, serif; 
        color:#ff6933;
        /* font-weight:bold; */
        font-size:20px;
        border:8px solid #121254;
    }
  
    </style>

</head>
<body>
        <div >
                <nav style="background-color:#121254;" class="navbar navbar-expand-sm ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('logo1.png') }}" alt="noimage.png" width=130px height=120px;></a>
    
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link n1" href="{{ route('home') }}">Home</a></li>
                                <li class="nav-item"><a class="nav-link n1" href="{{ route('about') }}">About us</a></li>
                
            @auth('admin')
                    <li><a class="nav-link n1" href="{{ route('schedule.admin') }}">Make Schedule</a></li>
                    <li><a class="nav-link n1" href="{{ route('viewemail') }}">Send Email</a></li>
                    @endauth
                    @auth('teacher')
                    <li><a class="nav-link n1" href="{{ route('comment') }}">Put Comment/Remarks</a></li>
                    <li><a class="nav-link n1" href="{{ route('schedule.teacher') }}">View Schedule</a></li>
                    <li><a class="nav-link n1" href="{{ route('makeworksheet') }}">Make A Worksheet</a></li>
                    @endauth

                    @auth('student')
                    <li><a class="nav-link n1" href="{{ route('schedule.student') }}">View Schedule</a></li>
                    <li><a class="nav-link n1" href="{{ route('viewworksheet') }}">View Worksheets</a></li>
                    <li><a class="nav-link n1" href="{{ route('viewcomment') }}">View Remarks</a></li>
                    @endauth
                    </ul>
                    @guest('admin')
                        @guest('teacher')
                            @guest('student')
                            
                    <ul class="navbar-nav ml-auto" >
                        <li>
                                <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle n1"  id="menu1" type="button" data-toggle="dropdown">Log In
                                        <span class="caret"></span></button>
                                        <ul class="dropdown-menu" style="background-color:#121254;" role="menu" aria-labelledby="menu1">
                                            <li class="nav-item" style="background-color: #121254;;" role="presentation"><a class="nav-link n1" style="background-color: #121254;;" role="menuitem" tabindex="-1" href= "{{ route('login.admin') }}">Admin</a></li>
                                            <li role="presentation" class="divider"></li>
                                            <li class="nav-item" style="background-color: #121254;;" role="presentation"><a class="nav-link n1" style="background-color: #121254;;" role="menuitem" tabindex="-1" href="{{ route('login.teacher') }}">Teacher</a></li>
                                            <li role="presentation" class="divider"></li>
                                            <li class="nav-item"  style="background-color: #121254;;" role="presentation"><a class="nav-link n1" style="background-color: #121254;;" role="menuitem" tabindex="-1" href="{{ route('login.student') }}">Student</a></li>
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
                        @auth('admin')
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
                        @auth('teacher')
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
                        @auth('student')
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
                    </div>
        </nav>
    </div>
    
</body>
</html>
