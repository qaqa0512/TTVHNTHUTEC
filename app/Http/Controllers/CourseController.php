<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

class CourseController extends Controller
{
    // Khóa học
    public function course()
    {
        return view('pages.courses');
    }
    public function detailcourses()
    {
        return view('pages.details');
    }

    public function add_course()
    {
        return view('admin.addcourse');
    }

    public function saveCourse(Request $request)
    {
        $data = array();
        $data['course_title'] = $request->course_title;
        $data['course_name'] = $request->course_name;
        $data['course_description'] = $request->course_description;
        $data['course_category'] = $request->course_category;
        $data['course_image'] = $request->course_image;
        
        DB::table('course')->insert($data);
        $request->session()->put('mes', 'Thêm khóa học thành công!');
        return Redirect::to('/quantri/cackhoahoc');
    }

    public function all_courses()
    {
        $course = DB::table('course')->get();
        $manger_course = view('admin.allcourse')->with('course',$course);
        return view('admin')->with('admin.allcourse', $manger_course);
    }
}
