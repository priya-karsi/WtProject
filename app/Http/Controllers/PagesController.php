<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Comment;
use App\Schedule;
use Cookie;
use DateTime;
use App\Lecture;

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
        $teacher = Teacher::where('name',$request['teacher_name'])->first();
        $tid = $teacher['id'];
        $student = Student::where('name',$request['student_name'])->first();
        $id = $student['id'];
        $admin = Comment::create([
            'teacher_id' => $tid,
            'student_id' => $id,
            'comment' => $request['comment'],
        ]);
        return redirect('\teacher');
    }
    // $admin = Admin::create([
    //     'name' => $request['name'],
    //     'email' => $request['email'],
    //     'password' => Hash::make($request['password']),
    // ]);
    public function viewSchedule() {
        $teachers = Teacher::all();
        return view('pages/schedule')->with('teachers',$teachers);
    }
    public function createSchedule(Request $request) {
        $day = new DateTime($request['date']);
        $aday = $day->format('l'); 
            $schedule = Schedule::create([
            'date' => $request['date'],
            'time_in' => $request['time_in'],
            'time_out' => $request['time_out'],
            'day' => $aday,
            'standard' => $request['standard'],
        ]);
        echo $request;
        // $id = $schedule->id;
        // $request['no_lecs'] = 1;
        // $i = $request['no_lecs'];
        // $request['time_in_1'] = $request['time_in'];
        // $request['time_out_1'] = $request['time_out'];
        // $request['teacher_1'] = 1;
        // for ($x = 1; $x <= $i; $x++) {
        //     $lecture = Lecture::create([
        //         'schedule' => $id,
        //         'time_in' => $request['time_in_'+$x],
        //         'time_out' => $request['time_out_'+$x],
        //         'teacher' => $request['teacher_'+$x],
        //     ]);
        // }
        // return redirect('/admin')->with('success','SuccessFully Created');
    }
}