<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Comments;
use App\Models\Profile;
Use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Cart;

class MyCourseController extends Controller
{
    //My course
    public function myCourse()
    {
        $user_id = Auth::user()->id;
        $profile_url = DB::table('users')->join('profile','profile.user_id','=','users.id')->where('profile.user_id',$user_id)->first();
        
        return view('pages.profile_client.myCourse')->with('profile_url',$profile_url);
    }
    public function addFavouriteCourse(Request $request)
    {
        $courseID = $request->course_id_hidden;

        $course_info = DB::table('course')->where('id',$courseID)->first();

        $data['id'] =$course_info->id; 
        $data['qty'] =$course_info->id; 
        $data['name'] =$course_info->course_title; 
        $data['price'] =$course_info->id;  
        $data['weight']=$course_info->id;  
        $data['options']['slug'] =$course_info->course_slug; 
        $data['options']['image'] =$course_info->course_image;
        

        Cart::add($data);

        // Cart::destroy();
        return Redirect::to('/khoahoccuatoi');
    }

    public function deleteFavouriteCourse($rowId)
    {
        Cart::update($rowId, 0);

        return Redirect::to('/khoahoccuatoi');
    }
}
