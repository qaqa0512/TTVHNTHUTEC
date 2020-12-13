<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

class PagesController extends Controller
{
    // Trang chủ
    public function homepage()
    {
        $course = DB::table('course')->limit(3)->get();
        return view('pages.home')->with('showCourse',$course);
    }
    // Liên hệ 
    public function contact()
    {
        return view('pages.contact');
    }
}
