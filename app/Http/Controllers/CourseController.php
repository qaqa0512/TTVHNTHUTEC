<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Comments;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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
    // Create Course - get
    public function add_course()
    {
        $this->AuthLogin();
        return view('admin.addcourse');
    }
    // Create Admin Course - post
    public function saveCourse(Request $request)
    {
        $data = array();
        $data['course_title'] = $request->course_title;
        $data['course_name'] = $request->course_name;
        $data['course_description'] = $request->course_description;
        $data['course_category'] = $request->course_category;
        $data['course_slug'] = str_slug($request->course_title);
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

    // Edit Admin Course - get
    public function edit_course($id)
    {
        $this->AuthLogin();
        $edit_course = DB::table('course')->where('id',$id)->get();
        $manger_course = view('admin.editcourse')->with('edit_course',$edit_course);
        return view('admin')->with('admin.editcourse', $manger_course);
    }
    public function editCourse(Request $request, $id)
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
            DB::table('course')->where('id',$id)->update($data);
            $request->session()->put('mes', 'Cập nhật khóa học thành công!');
            return Redirect::to('/quantri/cackhoahoc');
        }
        DB::table('course')->where('id',$id)->update($data);
        $request->session()->put('mes', 'Cập nhật khóa học thành công!');
        return Redirect::to('/quantri/cackhoahoc');
    }

    // Delete Admin Course - get
    public function delete_course($id)
    {
        $this->AuthLogin();
        DB::table('course')->where('id',$id)->delete();
        session()->put('mes', 'Xoá khóa học thành công!');
        return Redirect::to('/quantri/cackhoahoc');
    }

    public function all_courses()
    {
        $course = DB::table('course')->get();
        $manger_course = view('admin.allcourse')->with('course',$course);
        return view('admin')->with('admin.allcourse', $manger_course);
    }


    
    //Add detail course
    public function add_Detail()
    {
        $course = DB::table('course')->get();
        $lesson = DB::table('lesson')->get();
        return view('admin.addDescription')->with('course',$course)->with('lesson',$lesson);
    }

    // Create Admin detail Course - post
    public function saveDescription(Request $request)
    {
        $data = array();
        $data['detail_des_course'] = $request->detail_des_course;
        $data['detail_des_instructor'] = $request->detail_des_instructor;
        $data['detail_des_request'] = $request->detail_des_request;
        $data['detail_des_rate'] = $request->detail_des_rate;
        $data['course_id'] = $request->description_course_id;
        $data['lesson_id'] = $request->description_lesson_id;

        DB::table('detail_course')->insert($data);
        $request->session()->put('mes', 'Thêm mô tả chi tiết khóa học thành công!');
        return Redirect::to('/quantri/motakhoahoc');
    }

    // Edit Admin Course - get
    public function edit_description($detail_id)
    {
        // $this->AuthLogin();
        $course = DB::table('course')->get();
        $edit_des = DB::table('detail_course')->where('detail_id',$detail_id)->get();
        $lesson = DB::table('lesson')->get();
        $manger_course = view('admin.editDescription')->with('edit_description',$edit_des)->with('course',$course)->with('lesson',$lesson);
        return view('admin')->with('admin.editDescription', $manger_course);
    }
    public function editDescription(Request $request, $detail_id)
    {
        $data = array();
        $data['detail_des_course'] = $request->detail_des_course;
        $data['detail_des_instructor'] = $request->detail_des_instructor;
        $data['detail_des_request'] = $request->detail_des_request;
        $data['detail_des_rate'] = $request->detail_des_rate;
        $data['course_id'] = $request->description_course_id;
        $data['lesson_id'] = $request->description_lesson_id;

        DB::table('detail_course')->where('detail_id',$detail_id)->update($data);
        $request->session()->put('mes', 'Cập nhật mô tả khóa học thành công!');
        return Redirect::to('/quantri/motakhoahoc');
    }

    // Delete Admin Course - get
    public function delete_description($detail_id)
    {
        $this->AuthLogin();
        DB::table('detail_course')->where('detail_id',$detail_id)->delete();
        session()->put('mes', 'Xoá mô tả khóa học thành công!');
        return Redirect::to('/quantri/motakhoahoc');
    }


    public function all_Detail()
    {

        $alldetail = DB::table('detail_course')->join('course','course.id','=','detail_course.course_id')->get();
        $manger_course = view('admin.allDescription')->with('detailCourse',$alldetail);
        return view('admin')->with('admin.allDescription', $manger_course);
    }

    // End Admin Page



    // Client Course Page
    public function course()
    {
        // $this->AuthLoginUser();
        $course = DB::table('course')->get();
        return view('pages.courses')->with('displayCourse',$course);
    }

    //Post Comment
    public function postComment(Request $request,$course_id)
    {
        $this->validate($request,[
            'comment_content'=>'required'
        ]);
        $comment = new Comments;
        $comment->user_id = Auth::user()->id;
        $comment->course_id = $course_id;
        $comment->comment_content = $request->input('comment_content');
        $comment->save();

        $request->session()->put('mes', 'Đăng bình luận thành công!');
        return back();
    }
    public function deleteComment($course_slug, $comment_id)
    {
        $comments = DB::table('posts_comments')
        ->join('users','users.id','=','posts_comments.user_id')
        ->join('course','course.course_slug','=','posts_comments.course_id')
        ->where('course_slug',$course_slug)
        ->where('comment_id',$comment_id)->delete();

        session()->put('mes', 'Xóa bình luận thành công!');
        return back();
    }
    // Detail Course
    public function detailcourses($course_slug)
    {
        $detail = DB::table('course')->where('course_slug',$course_slug)->first();

        $lesson = DB::table('lesson')->join('course','course.id','=','lesson.course_id')
        ->join('part_content','part_content.part_id','=','lesson.part_id')->where('course_slug',$course_slug)->get();


        $allDescription = DB::table('detail_course')
        ->join('course','course.id','=','detail_course.course_id')
        ->join('lesson','lesson.lesson_id','=','detail_course.lesson_id')
        ->where('course_slug',$course_slug)->first();
        
        $comments = DB::table('posts_comments')
        ->join('users','users.id','=','posts_comments.user_id')
        ->join('course','course.course_slug','=','posts_comments.course_id')
        ->where('course_slug',$course_slug)
        ->get();

        foreach ($comments as $key) {
            $comment_id = $key->comment_id;
        }
        
        $comments_first = DB::table('posts_comments')
        ->join('users','users.id','=','posts_comments.user_id')
        ->join('course','course.course_slug','=','posts_comments.course_id')
        ->where('course_slug',$course_slug)
        ->first();

        return view('pages.details',compact('detail','lesson','allDescription','comments','comments_first'));
    }


    


}


