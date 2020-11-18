<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    // Khóa học
    public function course()
    {
        $data['courselist'] = Course::all();
        return view('pages.courses',$data);
    }
    public function detailcourses()
    {
        return view('pages.details');
    }
}
