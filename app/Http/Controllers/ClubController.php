<?php

namespace App\Http\Controllers;
use App\Models\ClubCategory;
use App\Models\Club;
use App\Models\ClubMember;
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
        return view('pages.club.detail_club')->with('club_info_page',$club_info_page)->with('club_info_cate',$club_info_cate)->with('club_member',$club_member);
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
