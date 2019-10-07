<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','PagesController@home')->name('home');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('login.admin');
Route::get('/login/teacher', 'Auth\LoginController@showTeacherLoginForm')->name('login.teacher');
Route::get('/login/student', 'Auth\LoginController@showStudentLoginForm')->name('login.student');

Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('register.admin');
Route::get('/register/teacher', 'Auth\RegisterController@showTeacherRegisterForm')->name('register.teacher');
Route::get('/register/student', 'Auth\RegisterController@showStudentRegisterForm')->name('register.student');

Route::post('/login/admin', 'Auth\LoginController@adminLogin')->name('login.admin');
Route::post('/login/teacher', 'Auth\LoginController@teacherLogin')->name('login.teacher');
Route::post('/login/student', 'Auth\LoginController@studentLogin')->name('login.student');

Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('register.admin');
Route::post('/register/teacher', 'Auth\RegisterController@createTeacher')->name('register.teacher');
Route::post('/register/student', 'Auth\RegisterController@createStudent')->name('register.student');

Route::view('/home', 'pages/home')->name('home');
Route::view('/admin', 'admin')->middleware('auth:admin')->name('admin');
Route::view('/teacher', 'teacher')->middleware('auth:teacher')->name('teacher');

Route::get('/comment','PagesController@addcomment')->middleware('auth:teacher')->name('comment');
Route::post('/comment','PagesController@storecomment')->name('comment');

Route::get('/schedule','PagesController@viewSchedule')->middleware('auth:admin')->name('schedule');
Route::post('/schedule','PagesController@createSchedule')->middleware('auth:admin');

Route::view('/student', 'student')->middleware('auth:student')->name('student');
Auth::routes();
// Route::post('/logout', function() {
//     return view('logout');
// })->name('logout');

//Route::post('/home', 'HomeController@index')->name('home');
//Route::get('/home', 'HomeController@index')->name('home');