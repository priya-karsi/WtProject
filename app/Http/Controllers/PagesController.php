<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class PagesController extends Controller
{
    public function home (){
        return view('pages/home');
    }
    public function about(){
        $teachers = Teacher::all();
        return view('pages.about')-> with('teachers',$teachers);
    }
}
