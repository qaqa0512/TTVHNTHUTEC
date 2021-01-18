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

//Search
Route::post('/timkiem','App\Http\Controllers\PagesController@search');

//Club
Route::get('/caulacbo','App\Http\Controllers\ClubController@club');
Route::get('/chitietcaulacbo/{club_category_slug}','App\Http\Controllers\ClubController@detailClub');
Route::post('/themthanhvien','App\Http\Controllers\ClubController@addClubMember');

// Profile
Route::get('/capnhatthongtin','App\Http\Controllers\ProfileController@profile');
Route::post('/themthongtin','App\Http\Controllers\ProfileController@addProfile');

Route::get('/thongtincanhan','App\Http\Controllers\ProfileController@displayProfile');


// Contact
Route::get('/lienhe','App\Http\Controllers\PagesController@contact');
Route::post('/guilienhe','App\Http\Controllers\ContactController@addContact');
//About
Route::get('/gioithieu','App\Http\Controllers\PagesController@about');

// Courses
Route::get('/khoahoc','App\Http\Controllers\CourseController@course');

Route::get('/khoahoc/{course_slug}','App\Http\Controllers\CourseController@detailcourses');


// Comment
Route::post('/khoahoc/{course_slug}','App\Http\Controllers\CourseController@postComment');
Route::get('/khoahoc/{course_slug}/{comment_id}','App\Http\Controllers\CourseController@deleteComment');


//Event
Route::get('/sukien','App\Http\Controllers\EventController@event');

Route::get('/thamgia/{event_id}','App\Http\Controllers\EventController@active');
Route::get('/khongthamgia/{event_id}','App\Http\Controllers\EventController@unactive');

// //Event - Status
Route::post('/trangthaisk/{event_id}','App\Http\Controllers\EventController@event_status');
// Event - details

Route::get('/chitietsukien/{event_id}','App\Http\Controllers\EventController@detail_event');

// My course
Route::get('/khoahoccuatoi','App\Http\Controllers\MyCourseController@myCourse');

Route::post('/themvaokhoahoccuatoi','App\Http\Controllers\MyCourseController@addFavouriteCourse');

Route::get('/xoakhoahoccuatoi/{rowId}','App\Http\Controllers\MyCourseController@deleteFavouriteCourse');

// Video
Route::get('/video/{lesson_slug}','App\Http\Controllers\VideoController@video_lesson');

//Blog
Route::get('/blog','App\Http\Controllers\BLogController@blog');
Route::post('/blog/themblog','App\Http\Controllers\BLogController@addBlog');
Route::post('/binhluanblog/{blog_id}','App\Http\Controllers\BLogController@blogComment');


Route::get('/chitietblog/{blog_id}','App\Http\Controllers\BLogController@detailBlog');
Route::get('/chitietblog/xoabinhluan/{blog_id}/{blog_comment_id}','App\Http\Controllers\BLogController@blogDeleteComment');

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

// Club 
Route::get('/quantri/themcaulacbo','App\Http\Controllers\ClubController@add_club');

Route::post('/themclb','App\Http\Controllers\ClubController@saveClub');
Route::get('/quantri/caccaulacbo','App\Http\Controllers\ClubController@allClub');

Route::get('/quantri/themthongtinclb','App\Http\Controllers\ClubController@add_club_info');
Route::post('/themthongtinclb','App\Http\Controllers\ClubController@saveClubInfo');

Route::get('/quantri/capnhatthongtinclb/{club_id}','App\Http\Controllers\ClubController@edit_club_info');
Route::post('/capnhatthongtinclb/{club_id}','App\Http\Controllers\ClubController@editClubInfo');


Route::get('/quantri/thongtincaulacbo','App\Http\Controllers\ClubController@allClubInfo');


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


//Contact
Route::get('/quantri/thongtinlienhe','App\Http\Controllers\ContactController@displayContact');


// Event
Route::get('/quantri/themsukien','App\Http\Controllers\EventController@add_event');
Route::post('/themsk','App\Http\Controllers\EventController@addEvent');

//Update event
Route::get('/quantri/capnhatsukien/{event_id}','App\Http\Controllers\EventController@edit_event');
Route::post('/capnhatsk/{event_id}','App\Http\Controllers\EventController@ediEvent');

// Delete event
Route::get('/quantri/xoasukien/{event_id}','App\Http\Controllers\EventController@delete_event');


Route::get('/quantri/cacsukien','App\Http\Controllers\EventController@all_event');

// Display Course
Route::get('/quantri/cackhoahoc','App\Http\Controllers\CourseController@all_courses');
Route::get('/quantri/motakhoahoc','App\Http\Controllers\CourseController@all_Detail');
Route::get('/quantri/phanhoc','App\Http\Controllers\VideoController@all_part_content');
Route::get('/quantri/cacbaihoc','App\Http\Controllers\VideoController@all_lesson');
