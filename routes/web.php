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
Route::get('/quantri/capnhatkhoahoc/{course_id}','App\Http\Controllers\CourseController@edit_course');
Route::post('/capnhatkh/{course_id}','App\Http\Controllers\CourseController@editCourse');
//Course - Delete
Route::get('/quantri/xoakhoahoc/{course_id}','App\Http\Controllers\CourseController@delete_course');

//Course - Add detail
Route::get('/quantri/themmotakhoahoc','App\Http\Controllers\CourseController@add_Detail');
Route::post('/themmotakh','App\Http\Controllers\CourseController@saveDescription');
//Course - Edit detail
Route::get('/quantri/capnhatmotakhoahoc/{detail_id}','App\Http\Controllers\CourseController@edit_description');
Route::post('/capnhatmotakh/{detail_id}','App\Http\Controllers\CourseController@editDescription');
// //Course - Delete
Route::get('/quantri/xoamotakhoahoc/{detail_id}','App\Http\Controllers\CourseController@delete_description');



// Display Course
Route::get('/quantri/cackhoahoc','App\Http\Controllers\CourseController@all_courses');
Route::get('/quantri/motakhoahoc/{course_id}','App\Http\Controllers\CourseController@all_Detail');