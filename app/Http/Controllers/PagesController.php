<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Brian2694\Toastr\Facades\Toastr;
use Session;

class PagesController extends Controller
{
    // Trang chủ
    public function homepage()
    {
        $course = DB::table('course')->limit(3)->get();
        $event_hp = DB::table('event')->limit(3)->get();
        $blogggg = DB::table('blog')->limit(1)->get();
        return view('pages.home')->with('showCourse',$course)->with('showEvent',$event_hp)->with('blogggg',$blogggg);
    }
    // Liên hệ 
    public function contact()
    {
        return view('pages.contact_client.contact');
    }
    public function about()
    {
        // Toastr::success('Hello','Thông báo');
        return view('pages.about');
    }

    public function search(Request $request)
    {
        $course = DB::table('course')->get();
        $event_hp = DB::table('event')->get();
        $blogggg = DB::table('blog')->get();

        $keyword = $request->keyword_submit;

        if(isset($keyword)){
            $search_cou = DB::table('course')->where('course_title','like','%'. $keyword .'%')->orWhere('course_name','like','%'. $keyword .'%')->get();
            Toastr::success('Tìm kiếm thành công','Thông báo');
            return view('pages.search.search_course')->with('showCourse',$course)->with('search',$search_cou);
        }
        else{
            Toastr::error('Không tìm thấy kết quả','Thông báo');
            return view('pages.search.search_error');
        }
    }
}
