<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

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
// Client
Route::get('/','App\Http\Controllers\PagesController@homepage');



// Courses
Route::get('/khoahoc','App\Http\Controllers\CourseController@course');
Route::get('/khoahoc/{course_slug}','App\Http\Controllers\CourseController@detailcourses');
// Comment
Route::post('/khoahoc/{course_slug}','App\Http\Controllers\CourseController@postComment');

Route::get('/khoahoc/capnhatcomment/{course_slug}/{comment_id}','App\Http\Controllers\CourseController@editComment');
Route::get('/khoahoc/{course_slug}/{comment_id}','App\Http\Controllers\CourseController@deleteComment');

// Video
Route::get('/video/{lesson_slug}','App\Http\Controllers\VideoController@video_lesson');


// Authentication - get
Route::get('/dangnhap','App\Http\Controllers\Authentication@getLogin');
Route::get('/dangki','App\Http\Controllers\Authentication@getRegister');
// Authentication - post
Route::post('/dangnhaptk','App\Http\Controllers\Authentication@postLogin');
Route::post('/dangkitk','App\Http\Controllers\Authentication@postRegister');
// Logout
Route::get('/dangxuat','App\Http\Controllers\Authentication@Logout');

// Admin
Route::get('/quantri','App\Http\Controllers\AdminController@showDasboard');
Route::get('/quantri/dangnhapad','App\Http\Controllers\AdminController@loginAdmin');
Route::post('/quantri/admin-dashboard','App\Http\Controllers\AdminController@dashboard');

Route::get('/quantri/dangkiad','App\Http\Controllers\AdminController@registerAdmin');
Route::get('/quantri/dangxuatad','App\Http\Controllers\AdminController@dashboard_logout');

//Course - Create
Route::get('/quantri/themkhoahoc','App\Http\Controllers\CourseController@add_course');
Route::post('/themkh','App\Http\Controllers\CourseController@saveCourse');
//Course - Edit
Route::get('/quantri/capnhatkhoahoc/{id}','App\Http\Controllers\CourseController@edit_course');
Route::post('/capnhatkh/{id}','App\Http\Controllers\CourseController@editCourse');
//Course - Delete
Route::get('/quantri/xoakhoahoc/{id}','App\Http\Controllers\CourseController@delete_course');

//Course - Add detail
Route::get('/quantri/themmotakhoahoc','App\Http\Controllers\CourseController@add_Detail');
Route::post('/themmotakh','App\Http\Controllers\CourseController@saveDescription');
//Course - Edit detail
Route::get('/quantri/capnhatmotakhoahoc/{detail_id}','App\Http\Controllers\CourseController@edit_description');
Route::post('/capnhatmotakh/{detail_id}','App\Http\Controllers\CourseController@editDescription');
// //Course - Delete
Route::get('/quantri/xoamotakhoahoc/{detail_id}','App\Http\Controllers\CourseController@delete_description');

// Lesson - Add
Route::get('/quantri/thembaihoc','App\Http\Controllers\VideoController@add_lesson');
Route::post('/thembh','App\Http\Controllers\VideoController@saveLesson');

//// Lesson - Edit
Route::get('/quantri/capnhatbaihoc/{lesson_id}','App\Http\Controllers\VideoController@edit_lesson');
Route::post('/capnhatbh/{lesson_id}','App\Http\Controllers\VideoController@editLesson');
//// Lesson- Delete
Route::get('/quantri/xoabaihoc/{lesson_id}','App\Http\Controllers\VideoController@delete_lesson');


// Part_Content - Add
Route::get('/quantri/themphanhoc','App\Http\Controllers\VideoController@add_part_content');
Route::post('/themph','App\Http\Controllers\VideoController@savePart');
// Part_Content - Edit
Route::get('/quantri/capnhatphanhoc/{part_id}','App\Http\Controllers\VideoController@edit_part_content');
Route::post('/capnhatph/{part_id}','App\Http\Controllers\VideoController@editPart');
// Part_Content - Delete
Route::get('/quantri/xoaphanhoc/{part_id}','App\Http\Controllers\VideoController@delete_part');

// Display Course
Route::get('/quantri/cackhoahoc','App\Http\Controllers\CourseController@all_courses');
Route::get('/quantri/motakhoahoc','App\Http\Controllers\CourseController@all_Detail');
Route::get('/quantri/phanhoc','App\Http\Controllers\VideoController@all_part_content');
Route::get('/quantri/cacbaihoc','App\Http\Controllers\VideoController@all_lesson');
