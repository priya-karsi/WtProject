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
use Carbon\Carbon;

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
        return view('pages/adminschedule')->with('teachers',$teachers);
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
        echo $request['teacher_1'];
        $id = $schedule->id;
        $i = $request['no_lecs'];
        for ($x = 1; $x <= $i; $x++) {
            $tname = Teacher::where('name',$request['teacher_'.$x])->first();
            echo $tname['id'];
            $lecture = Lecture::create([
                'schedule' => $id,
                'time_in' => $request['time_in_'.$x],
                'time_out' => $request['time_out_'.$x],
                'teacher_id' => $tname['id'],
            ]);
        }
        return redirect('/admin')->with('success','SuccessFully Created');
    }
    public function studentschedule() {
        $user = Auth::user();
        $std = $user->standard;
        $schedules = Schedule::where('standard',$std)->orderBy('date','DESC')->get();
        $lectures = Lecture::all();
        $teachers = Teacher::all();
        $flag = 0;
        $date = Carbon::now()->format('Y-m-d');
        if($schedules[0]->date == $date)
        {
            $flag = 1;
        }
        return view('pages/studentschedule',['flag' => $flag,'schedules' => $schedules,'lectures' => $lectures,'teachers' => $teachers]);
    }
    public function teacherschedule() {
        $user = Auth::user();
        $id = $user->id;
        $mainsalary = $user->salary;
        $lectures = Lecture::where('teacher_id',$id)->get();
        $schedules = Schedule::orderBy('date','DESC')->get();
        $date = Carbon::now()->format('Y-m-d');
        return view('pages/teacherschedule',['mainsalary' => $mainsalary,'today' => $date,'lectures' => $lectures,'schedules' => $schedules]);
    }
}