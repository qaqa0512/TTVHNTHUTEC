<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\LessonDisLike;
use App\Models\LessonLike;
use App\Models\LessonComment;
use App\Models\Part_Content;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Yoeunes\Toastr\Facades\Toastr;
use Session;

class VideoController extends Controller
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
    // Display Client Page
    public function video_lesson($lesson_slug)
    {
        // $this->AuthLoginUser();
        $course = DB::table('course')->get();
        $partContent = DB::table('part_content')
        ->join('course','course.id','=','part_content.course_id')
        ->join('detail_course','detail_course.detail_id','=','part_content.detail_id')->get();

        $video = DB::table('lesson')
        ->join('course','course.id','=','lesson.course_id')
        ->join('part_content','part_content.part_id','=','lesson.part_id')
        ->where('lesson_slug',$lesson_slug)->get();

        $video_name = DB::table('lesson')->where('lesson_slug',$lesson_slug)->limit(1)->get();
        foreach ($video as $value) {
            $course_id = $value->id;
        }

        $course = DB::table('course')->where('id',$course_id)->first();

        $related_video = DB::table('lesson')
        ->join('course','course.id','=','lesson.course_id')
        ->join('part_content','part_content.part_id','=','lesson.part_id')
        ->where('course.id',$course_id)->get();

        //Like video
        $video_lesson_like = DB::table('like_lesson')
        ->join('lesson','lesson.lesson_slug','=','like_lesson.lesson_slug')
        ->join('users','users.id','=','like_lesson.user_id')
        ->where('like_lesson.lesson_slug',$lesson_slug)->count();

        //Dislike video
        $video_lesson_dislike = DB::table('dislike_lesson')
        ->join('lesson','lesson.lesson_slug','=','dislike_lesson.lesson_slug')
        ->join('users','users.id','=','dislike_lesson.user_id')
        ->where('dislike_lesson.lesson_slug',$lesson_slug)->count();

        //Lesson comment
        $video_lesson_comment = DB::table('comment_lesson')
        ->join('lesson','lesson.lesson_slug','=','comment_lesson.lesson_slug')
        ->join('users','users.id','=','comment_lesson.user_id')
        ->where('comment_lesson.lesson_slug',$lesson_slug)->get();

        if (Auth::check()) {
            return view ('pages.course_client.listvideo')
            ->with('video',$video)
            ->with('partContent',$partContent)
            ->with('videoName',$video_name)
            ->with('relate',$related_video)
            ->with('video_lesson_like',$video_lesson_like)
            ->with('video_lesson_dislike',$video_lesson_dislike)
            ->with('video_lesson_comment',$video_lesson_comment)
            ->with('course',$course);
        } else {
            return redirect('/dangnhap');
        }
    }

    //Lesson add -get 
    public function add_lesson()
    {
        $this->AuthLogin();
        $course = DB::table('course')->get();
        $partContent = DB::table('part_content')->get();
        
        return view ('admin.course.addLesson')->with('Course',$course)->with('part_Content',$partContent);
    }

    //Lesson add -post
    public function saveLesson(Request $request)
    {
        $data = array();
        $data['lesson_brand'] = $request->lesson_brand;
        $data['lesson_title'] = $request->lesson_title;
        $data['lesson_video'] = $request->lesson_video;
        $data['part_id'] = $request->lesson_part_id;
        $data['course_id'] = $request->lesson_course_id;
        $data['lesson_slug'] = str_slug($request->lesson_title);

        DB::table('lesson')->insert($data);
        $request->session()->put('mes', 'Thêm bài học thành công!');
        return Redirect::to('/quantri/cacbaihoc');
    }

    //Lesson edit - get 
    public function edit_lesson($lesson_id)
    {
        $this->AuthLogin();
        $course = DB::table('course')->get();
        $partContent = DB::table('part_content')->get();

        $edit_lesson = DB::table('lesson')->where('lesson_id',$lesson_id)->get();
        $manger_course = view('admin.course.editLesson')->with('editLesson',$edit_lesson)->with('Course',$course)->with('partContent',$partContent);
        return view('admin')->with('admin.course.editLesson', $manger_course);
    }

    //Lesson edit - post 
    public function editLesson(Request $request, $lesson_id)
    {
        $data = array();
        $data['lesson_brand'] = $request->lesson_brand;
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
        $this->AuthLogin();
        DB::table('lesson')->where('lesson_id', $lesson_id)->delete();
        session()->put('mes', 'Xoá bài học thành công!');
        return Redirect::to('/quantri/cacbaihoc');
    }

    //Part_Content Add - get
    public function add_part_content()
    {
        $parent = DB::table('part_content')->get();
        $course = DB::table('course')->get();
        $detail = DB::table('detail_course')->get();
        return view ('admin.course.addPartLesson')->with('Course',$course)->with('Detail',$detail)->with('parent',$parent);
    }

    //Part_Content Add - post
    public function savePart(Request $request)
    {
        $data = array();
        $data['part_title'] = $request->part_title;
        $data['course_id'] = $request->part_course_id;
        // $data['detail_id'] = $request->part_detail_id;

        DB::table('part_content')->insert($data);
        $request->session()->put('mes', 'Thêm phần của bài học thành công!');
        return Redirect::to('/quantri/phanhoc');
    
    }

    // Part_Content Edit - get
    public function edit_part_content($part_id)
    {
        $this->AuthLogin();
        $course = DB::table('course')->get();
        $detail = DB::table('detail_course')->get();

        $edit_part = DB::table('part_content')->where('part_id',$part_id)->get();
        $manger_course = view('admin.course.editPartLesson')->with('editPart',$edit_part)->with('Course',$course)->with('Detail',$detail);
        return view('admin')->with('admin.course.editPartLesson', $manger_course);
    }

    // Part_Content Edit - post
    public function editPart(Request $request,$part_id)
    {
        $data = array();
        $data['part_title'] = $request->part_title;
        $data['course_id'] = $request->part_course_id;
        // $data['detail_id'] = $request->part_detail_id;

        DB::table('part_content')->where('part_id',$part_id)->update($data);
        $request->session()->put('mes', 'Cập nhật phần của bài học thành công!');
        return Redirect::to('/quantri/phanhoc');
    }

    // Part_content delete - get
    public function delete_part($part_id)
    {
        $this->AuthLogin();
        DB::table('part_content')->where('part_id',$part_id)->delete();
        session()->put('mes', 'Xoá bài học thành công!');
        return Redirect::to('/quantri/phanhoc');
    }

    //Display Admin Page
    public function all_part_content()
    {
        $this->AuthLogin();
        $course = DB::table('course')->get();
        $detail = DB::table('detail_course')->get();
        $allPartContent = DB::table('part_content')
        ->join('course','course.id','=','part_content.course_id')->get();
        $manger_course = view('admin.course.allPartContent')->with('allPartContent',$allPartContent);

        return view('admin')->with('admin.course.allPartContent',$manger_course);
    }

    public function all_lesson()
    {
        $this->AuthLogin();
        $course = DB::table('course')->get();
        $detail = DB::table('part_content')->get();

        $allLesson = DB::table('lesson')
        ->join('course','course.id','=','lesson.course_id')
        ->join('part_content','part_content.part_id','=','lesson.part_id')->get();
        $manger_course = view('admin.course.allLesson')->with('allLesson',$allLesson);
        return view('admin')->with('admin.course.allLesson', $manger_course);
    }

    // Like lesson video
    public function video_lesson_like($lesson_slug)
    {
        if(Auth::check()){
            $user = Auth::user()->id;
            $user_like = LessonLike::where(['user_id'=>$user,'lesson_slug' => $lesson_slug])->first();
            if(empty($user_like->user_id)){
                $user_id = Auth::user()->id;
                $lesson_like_id = $lesson_slug;
                $lessonLike = new LessonLike;
                $lessonLike->user_id = $user_id;
                $lessonLike->lesson_slug = $lesson_like_id;
                $lessonLike->save();
                
                Toastr::success('Tôi thích video này','Thông báo');
                return back();            
            }
            else{
                Toastr::error('Bạn đã thích video này rồi :(','Thông báo');
                return back(); 
            }
        }else{
            return redirect('/dangnhap');
        }
    }

    public function video_lesson_dislike($lesson_slug)
    {
        if(Auth::check()){
            $user = Auth::user()->id;
            $user_dislike = LessonDisLike::where(['user_id'=>$user,'lesson_slug' => $lesson_slug])->first();
            if(empty($user_dislike->user_id)){
                $user_id = Auth::user()->id;
                $lesson_dislike_id = $lesson_slug;
                $lessonLike = new LessonDisLike;
                $lessonLike->user_id = $user_id;
                $lessonLike->lesson_slug = $lesson_dislike_id;
                $lessonLike->save();
                
                Toastr::success('Tôi không thích video này','Thông báo');
                return back();            
            }
            else{
                Toastr::error('Chỉ được 1 lần :(','Thông báo');
                return back(); 
            }
        }else{
            return redirect('/dangnhap');
        }
    }

    //Lesson Comment
    public function addLessonComment(Request $request,$lesson_slug)
    {
        $comment_lesson = new LessonComment();
        $comment_lesson->user_id = Auth::user()->id;
        $comment_lesson->lesson_slug = $lesson_slug;
        $comment_lesson->comment_lesson_content = $request->input('comment_lesson_content');
        $comment_lesson->save();

        Toastr::success('Đăng bình luận thành công','Thông báo');
        
        return back();
    }
}
