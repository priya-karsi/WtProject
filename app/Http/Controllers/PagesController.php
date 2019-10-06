<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Comment;

class PagesController extends Controller
{
    public function home (){
        return view('pages/home');
    }
    public function about(){
        $teachers = Teacher::all();
        return view('pages.about')-> with('teachers',$teachers);
    }
    public function addcomment() {
        $students = Student::all();
        return view('pages/comment')-> with('students',$students);
    }
    public function storecomment(Request $request) {
        $admin = Comment::create([
            'teacher_id' => 1,
            'student_id' => 1,
            'comment' => $request['comment'],
        ]);
    }
    // $admin = Admin::create([
    //     'name' => $request['name'],
    //     'email' => $request['email'],
    //     'password' => Hash::make($request['password']),
    // ]);
}
