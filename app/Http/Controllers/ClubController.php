<?php

namespace App\Http\Controllers;
use App\Models\ClubCategory;
use App\Models\Club;
use App\Models\ClubMember;
use App\Models\club_activity_like;
use App\Models\club_activity_dislike;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Yoeunes\Toastr\Facades\Toastr;
use Session;

class ClubController extends Controller
{
    //Client
    public function club()
    {
        $club_cate= DB::table('club_category')->get();
        return view('pages.club.club_page')->with('club_cate',$club_cate);
    }

    // Club Member
    public function addClubMember(Request $request)
    {
        if(Auth::check()){
            $data = array();
            $data['club_member_name'] = $request->club_member_name;
            $data['club_member_email'] = $request->club_member_email;
            $data['club_member_phone'] = $request->club_member_phone;
            $data['club_category_id'] = $request->club_category_id;
    
            DB::table('club_member')->insert($data);
            Toastr::success('Đăng kí tham gia câu lạc bộ thành công','Thông báo');
            return back();
        }
        else{
            return redirect('/dangnhap');
        }
    }

    public function detailClub($club_category_slug)
    {   
        $club_info_page = DB::table('club')->join('club_category','club_category.club_category_id','=','club.club_category_id')->where('club_category_slug',$club_category_slug)->get();
        $club_info_cate= DB::table('club_category')->where('club_category_slug',$club_category_slug)->first();
        $club_member = DB::table('club_member')->join('club_category','club_category.club_category_id','=','club_member.club_category_id')->where('club_category_slug',$club_category_slug)->get();
        $club_activity = DB::table('club_activity')
        ->join('club_category','club_category.club_category_id','=','club_activity.club_category_id')
        ->join('users','club_activity.user_id','=','users.id')->where('club_category_slug',$club_category_slug)->get();

        $clubLike = DB::table('club_activity_like')
        ->join('club_category','club_category.club_category_id','=','club_activity_like.club_category_id')
        ->join('club_activity','club_activity.club_activity_id','=','club_activity_like.club_category_id')
        ->join('users','club_activity.user_id','=','users.id')->where('club_category_slug',$club_category_slug)->count();
        
        return view('pages.club.detail_club')->with('club_info_page',$club_info_page)
        ->with('club_info_cate',$club_info_cate)
        ->with('club_member',$club_member)
        ->with('club_activity',$club_activity)
        ->with('clubLike',$clubLike);
    }
    public function detailClubActivity($club_category_slug,$club_activity_id)
    {   
        $club_activity = DB::table('club_activity')
        ->join('club_category','club_category.club_category_id','=','club_activity.club_category_id')
        ->join('users','club_activity.user_id','=','users.id')->where('club_category_slug',$club_category_slug)->get();

        $clubLike = DB::table('club_activity_like')
        ->join('club_category','club_category.club_category_id','=','club_activity_like.club_category_id')
        ->join('club_activity','club_activity.club_activity_id','=','club_activity_like.club_category_id')
        ->join('users','club_activity.user_id','=','users.id')->where('club_category_slug',$club_category_slug)->count();
        
        return view('pages.club.detail_club')
        ->with('club_activity',$club_activity)
        ->with('clubLike',$clubLike);
    }

    // Club Activity
    public function addClubActivity(Request $request)
    {
        $data = array();
            $data['user_id'] = Auth::user()->id;
            $data['club_category_id'] = $request->club_category_id;
            $data['club_activity_content'] = $request->club_activity_content;

            DB::table('club_activity')->insert($data);
            Toastr::success('Đăng bài viết thành công','Thông báo');
            
            return back();
    }

    public function clubLike($club_category_id,$club_activity_id)
    {
        if(Auth::check()){
            $user = Auth::user()->id;
            
            $activity_like = club_activity_like::where(['user_id'=>$user,'club_category_id' => $club_category_id,'club_activity_id' => $club_activity_id])->first();
            if(empty($activity_like->user_id)){
                $user_id = Auth::user()->id;
                $club_cate_like_id = $club_category_id;
                $club_activity_like_id = $club_activity_id;
                $clubLike = new club_activity_like;
                $clubLike->user_id = $user_id;
                $clubLike->club_category_id = $club_cate_like_id;
                $clubLike->club_activity_id = $club_activity_like_id;
                $clubLike->save();
                
                Toastr::success('Bạn thích bài viết này','Thông báo');
                return back();            
            }
            else{
                Toastr::error('Bạn đã thích bài viết này rồi :(','Thông báo');
                return back(); 
            }
        }else{
            return redirect('/dangnhap');
        }
    }

    public function clubDisLike($club_category_id,$club_activity_id)
    {
        if(Auth::check()){
            $user = Auth::user()->id;
            
            $activity_dislike = club_activity_dislike::where(['user_id'=>$user,'club_category_id' => $club_category_id,'club_activity_id' => $club_activity_id])->first();
            if(empty($activity_dislike->user_id)){
                $user_id = Auth::user()->id;
                $club_cate_dislike_id = $club_category_id;
                $club_activity_dislike_id = $club_activity_id;
                $clubLike = new club_activity_dislike;
                $clubLike->user_id = $user_id;
                $clubLike->club_category_id = $club_cate_dislike_id;
                $clubLike->club_activity_id = $club_activity_dislike_id;
                $clubLike->save();
                
                Toastr::success('Bạn không thích bài viết này','Thông báo');
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

    // Admin
    public function add_club()
    {
        return view('admin.club.addClub');
    }

    public function saveClub(Request $request)
    {
        $data = array();
        $data['club_category_title'] = $request->club_category_title;
        $data['club_category_slug'] = $request->club_category_slug;
        $get_img = $request->file('club_category_image');
        if($get_img){
            $get_name_img = $get_img->getClientOriginalName();
            $name_img = current(explode('.',$get_name_img));
            $new_img = $name_img.rand(0,99).'.'.$get_img->getClientOriginalExtension();
            $get_img->move('public/upload/course',$new_img);
            $data['club_category_image'] = $new_img;
            DB::table('club_category')->insert($data);
            $request->session()->put('mes', 'Thêm câu lạc bộ thành công!');
            return Redirect::to('/quantri/caccaulacbo');
        }
        $data['club_category_image'] = '';

        DB::table('club_category')->insert($data);
        $request->session()->put('mes', 'Thêm câu lạc bộ thành công!');
        return Redirect::to('/quantri/caccaulacbo');
        
    }

    public function allClub()
    {
        $club_category= DB::table('club_category')->get();
        return view('admin.club.allClub')->with('club_category',$club_category);
    }


    //Club_info
    public function add_club_info()
    {
        $club_catee = DB::table('club_category')->get();
        $clubb = DB::table('club')->get();
        return view('admin.club.addDetailClub')->with('clubb',$clubb)->with('club_catee',$club_catee);
    }

    public function saveClubInfo(Request $request)
    {
        $data = array();
        $data['club_category_id'] = $request->club_category_id;
        $data['club_info'] = $request->club_info;

        DB::table('club')->insert($data);
        $request->session()->put('mes', 'Thêm thông tin thành công!');
        return Redirect::to('/quantri/thongtincaulacbo');
    }

    public function edit_club_info($club_id)
    {
        $edit_club_cate = DB::table('club_category')->get();
        $edit_clubb = DB::table('club')->where('club_id',$club_id)->get();
        return view('admin.club.editDetailClub')->with('edit_clubb',$edit_clubb)->with('edit_club_cate',$edit_club_cate);
    }
    public function editClubInfo(Request $request,$club_id)
    {
        $data = array();
        $data['club_category_id'] = $request->club_category_id;
        $data['club_info'] = $request->club_info;

        DB::table('club')->where('club_id',$club_id)->update($data);
        $request->session()->put('mes', 'Cập nhật thông tin thành công!');
        return Redirect::to('/quantri/thongtincaulacbo');
    }

    public function allClubInfo()
    {
        $club_info = DB::table('club')->get();
        return view('admin.club.allDetailClub')->with('club_info',$club_info);
    }
}
