<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

class VideoController extends Controller
{
    public function Video()
    {
        return view ('pages.listvideo');
    }

    //Lesson add -get 
    public function add_lesson()
    {
        $course = DB::table('course')->get();
        $partContent = DB::table('part_content')->get();
        
        return view ('admin.addLesson')->with('Course',$course)->with('partContent',$partContent);
    }
    //Lesson add -post
    public function saveLesson(Request $request)
    {
        $data = array();
        $data['lesson_title'] = $request->lesson_title;
        $data['lesson_video'] = $request->lesson_video;
        $data['part_id'] = $request->lesson_part_id;
        $data['course_id'] = $request->lesson_course_id;

        DB::table('lesson')->insert($data);
        $request->session()->put('mes', 'Thêm bài học thành công!');
        return Redirect::to('/quantri/cacbaihoc');
    }

    //Lesson edit - get 
    public function edit_lesson($lesson_id)
    {
        // $this->AuthLogin();
        $course = DB::table('course')->get();
        $partContent = DB::table('part_content')->get();

        $edit_lesson = DB::table('lesson')->where('lesson_id',$lesson_id)->get();
        $manger_course = view('admin.editLesson')->with('editLesson',$edit_lesson)->with('Course',$course)->with('partContent',$partContent);
        return view('admin')->with('admin.editLesson', $manger_course);
    }
    //Lesson edit - post 
    public function editLesson(Request $request, $lesson_id)
    {
        $data = array();
        $data['lesson_title'] = $request->lesson_title;
        $data['lesson_video'] = $request->lesson_video;
        $data['part_id'] = $request->lesson_part_id;
        $data['course_id'] = $request->lesson_course_id;

        DB::table('lesson')->where('lesson_id', $lesson_id)->update($data);
        $request->session()->put('mes', 'Cập nhật bài học thành công!');
        return Redirect::to('/quantri/cacbaihoc');
    }
    //Lesson delete
    public function delete_lesson($lesson_id)
    {
        // $this->AuthLogin();
        DB::table('lesson')->where('lesson_id', $lesson_id)->delete();
        session()->put('mes', 'Xoá bài học thành công!');
        return Redirect::to('/quantri/cacbaihoc');
    }

    //Part_Content Add - get
    public function add_part_content()
    {
        $course = DB::table('course')->get();
        $detail = DB::table('detail_course')->get();
        return view ('admin.addPartLesson')->with('Course',$course)->with('Detail',$detail);
    }
    //Part_Content Add - post
    public function savePart(Request $request)
    {
        $data = array();
        $data['part_title'] = $request->part_title;
        $data['course_id'] = $request->part_course_id;
        $data['detail_id'] = $request->part_detail_id;

        DB::table('part_content')->insert($data);
        $request->session()->put('mes', 'Thêm phần của bài học thành công!');
        return Redirect::to('/quantri/phanhoc');
    
    }
    // Part_Content Edit
    public function edit_part_content($part_id)
    {
        // $this->AuthLogin();
        $course = DB::table('course')->get();
        $detail = DB::table('detail_course')->get();

        $edit_part = DB::table('part_content')->where('part_id',$part_id)->get();
        $manger_course = view('admin.editPartLesson')->with('editPart',$edit_part)->with('Course',$course)->with('Detail',$detail);
        return view('admin')->with('admin.editPartLesson', $manger_course);
    }
    public function editPart(Request $request,$part_id)
    {
        $data = array();
        $data['part_title'] = $request->part_title;
        $data['course_id'] = $request->part_course_id;
        $data['detail_id'] = $request->part_detail_id;

        DB::table('part_content')->where('part_id',$part_id)->update($data);
        $request->session()->put('mes', 'Cập nhật phần của bài học thành công!');
        return Redirect::to('/quantri/phanhoc');
    }

    // Part_content delete - get
    public function delete_part($part_id)
    {
        // $this->AuthLogin();
        DB::table('part_content')->where('part_id',$part_id)->delete();
        session()->put('mes', 'Xoá bài học thành công!');
        return Redirect::to('/quantri/phanhoc');
    }

    //Display
    public function all_part_content()
    {
        
        $course = DB::table('course')->get();
        $detail = DB::table('detail_course')->get();
        $allPartContent = DB::table('part_content')
        ->join('course','course.id','=','part_content.course_id')
        ->join('detail_course','detail_course.detail_id','=','part_content.detail_id')->get();
        $manger_course = view('admin.allPartContent')->with('allPartContent',$allPartContent);

        return view('admin')->with('admin.allPartContent',$manger_course);
    }

    public function all_lesson()
    {
        $course = DB::table('course')->get();
        $detail = DB::table('part_content')->get();

        $allLesson = DB::table('lesson')
        ->join('course','course.id','=','lesson.course_id')
        ->join('part_content','part_content.part_id','=','lesson.part_id')->get();
        $manger_course = view('admin.allLesson')->with('allLesson',$allLesson);
        return view('admin')->with('admin.allLesson', $manger_course);
    }
}
