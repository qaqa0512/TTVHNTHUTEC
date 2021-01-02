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
        return view('pages.contact');
    }
    public function about()
    {
        return view('pages.about');
    }
}
