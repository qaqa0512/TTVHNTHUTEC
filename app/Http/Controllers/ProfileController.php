<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
Use App\Models\User;
use App\Models\Course;
use App\Models\Comments;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
use Session;
use Symfony\Component\Console\Input\Input;

class ProfileController extends Controller
{
    
    public function profile()
    {
        $user_id = Auth::user()->id;
        $profile_url = DB::table('users')->join('profile','profile.user_id','=','users.id')->where('profile.user_id',$user_id)->first();
        return view('pages.profile_client.profile')->with('profile_url',$profile_url);
    }

    public function displayProfile()
    {
        $user_id = Auth::user()->id;
        $profile = DB::table('users')->join('profile','profile.user_id','=','users.id')->where('profile.user_id',$user_id)->first();
        return view('pages.profile_client.displayprofile')->with('profile',$profile);
    }

    public function addProfile(Request $request)
    {
        $this->validate($request,[
            'profile_name' => 'required',
            'profile_date' => 'required',
            'profile_phone' => 'required',
            'profile_avatar' => 'required'
        ]);     
        $profile = new Profile;
        $profile->profile_name = $request->input('profile_name');
        $profile->user_id = Auth::user()->id;
        $profile->profile_date = $request->input('profile_date');
        $profile->profile_phone = $request->input('profile_phone');
        if($request->hasFile('profile_avatar'))
        {
            $file = $request->file('profile_avatar');
            $file->move(public_path(). '/publicpublic/upload/course/',$file->getClientOriginalName());
            $url = URL::to('/'). '/publicpublic/upload/course/'. $file->getClientOriginalName();
        }
        $profile->profile_avatar = $url;
        $profile->save();

        return redirect('/thongtincanhan')->with('respone','Cập nhật thông tin thành công');
    }
}
