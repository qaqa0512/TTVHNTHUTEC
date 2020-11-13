<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Trang chủ
    public function homepage()
    {
        return view('pages.home');
    }

    // Khóa học
    public function course()
    {
        return view('pages.courses');
    }
}
