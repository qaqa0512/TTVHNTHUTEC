<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

class CourseController extends Controller
{
    
    // Check login
    public function AuthLogin()
    {
        $admin_id = session()->get('admin_id');
        if($admin_id)
        {
            return Redirect::to('/quantri');
        }else{
            return Redirect::to('/quantri/dangnhapad')->send();
        }
    }

    // Khóa học
    public function course()
    {
        return view('pages.courses');
    }
    public function detailcourses()
    {
        return view('pages.details');
    }

    // Create Course - get
    public function add_course()
    {
        $this->AuthLogin();
        return view('admin.addcourse');
    }
    // Create Course - post
    public function saveCourse(Request $request)
    {
        $data = array();
        $data['course_title'] = $request->course_title;
        $data['course_name'] = $request->course_name;
        $data['course_description'] = $request->course_description;
        $data['course_category'] = $request->course_category;

        $get_img = $request->file('course_image');
        if($get_img){
            $get_name_img = $get_img->getClientOriginalName();
            $name_img = current(explode('.',$get_name_img));
            $new_img = $name_img.rand(0,99).'.'.$get_img->getClientOriginalExtension();
            $get_img->move('public/upload/course',$new_img);
            $data['course_image'] = $new_img;
            DB::table('course')->insert($data);
            $request->session()->put('mes', 'Thêm khóa học thành công!');
            return Redirect::to('/quantri/cackhoahoc');
        }
        $data['course_image'] = '';
        DB::table('course')->insert($data);
        $request->session()->put('mes', 'Thêm khóa học thành công!');
        return Redirect::to('/quantri/cackhoahoc');
    }

    // Edit Course - get
    public function edit_course($course_id)
    {
        $this->AuthLogin();
        $edit_course = DB::table('course')->where('course_id',$course_id)->get();
        $manger_course = view('admin.editcourse')->with('edit_course',$edit_course);
        return view('admin')->with('admin.editcourse', $manger_course);
    }
    public function editCourse(Request $request, $course_id)
    {
        $data = array();
        $data['course_title'] = $request->course_title;
        $data['course_name'] = $request->course_name;
        $data['course_description'] = $request->course_description;
        $data['course_category'] = $request->course_category;
        // $data['course_image'] = $request->course_image;

        $get_img = $request->file('course_image');
        if($get_img){
            $get_name_img = $get_img->getClientOriginalName();
            $name_img = current(explode('.',$get_name_img));
            $new_img = $name_img.rand(0,99).'.'.$get_img->getClientOriginalExtension();
            $get_img->move('public/upload/course',$new_img);
            $data['course_image'] = $new_img;
            DB::table('course')->where('course_id',$course_id)->update($data);
            $request->session()->put('mes', 'Cập nhật khóa học thành công!');
            return Redirect::to('/quantri/cackhoahoc');
        }
        DB::table('course')->where('course_id',$course_id)->update($data);
        $request->session()->put('mes', 'Cập nhật khóa học thành công!');
        return Redirect::to('/quantri/cackhoahoc');
    }

    // Delete Course - get
    public function delete_course($course_id)
    {
        $this->AuthLogin();
        DB::table('course')->where('course_id',$course_id)->delete();
        session()->put('mes', 'Xoá khóa học thành công!');
        return Redirect::to('/quantri/cackhoahoc');
    }

    public function all_courses()
    {
        $course = DB::table('course')->get();
        $manger_course = view('admin.allcourse')->with('course',$course);
        return view('admin')->with('admin.allcourse', $manger_course);
    }
}
