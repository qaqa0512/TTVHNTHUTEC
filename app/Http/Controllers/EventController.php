<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Event;
use App\Models\Join;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Yoeunes\Toastr\Facades\Toastr;
use Session;
class EventController extends Controller
{
    //Client
    public function event()
    {
        $event = DB::table('event')->get();
        // $join = DB::table('joined')->get();
        return view('pages.event_client.event')->with('event',$event);
    }

    

    public function detail_event($event_id)
    {
        
        $event_detail = DB::table('event')->where('event_id',$event_id)->first();
        DB::table('event')->where('event_id',$event_id)->update(['view_event_count'=>$event_detail->view_event_count + 1]);
        
        $join = DB::table('event')->join('joined','joined.event_id','=','event.event_id')->where('joined.event_id',$event_id)->count();
        
        return view('pages.event_client.event_detail')->with('event_detail',$event_detail)->with('join',$join);
    }

    public function active($event_id)
    {
        if(Auth::check()){
            $user = Auth::user()->id;
            $join_user = Join::where(['user_id'=>$user,'event_id' => $event_id])->first();
            if(empty($join_user->user_id)){
                $user_id = Auth::user()->id;
                $event_join_id = $event_id;
                $joined = new Join;
                $joined->user_id = $user_id;
                $joined->event_id = $event_join_id;
                $joined->save();
                
                Toastr::success('Tham gia sự kiện thành công','Thông báo');
                return back();            
            }
            else{
                Toastr::error('Bạn đã tham gia sự kiện rồi :(','Thông báo');
                return back(); 
            }
        }else{
            return redirect('/dangnhap');
        }
    }

    //Admin
    public function add_event()
    {
        return view('admin.event.addEvent');
    }

    public function addEvent(Request $request)
    {
        $data = array();
        $data['event_title'] = $request->event_title;
        $data['event_name'] = $request->event_name;
        $data['event_date_time'] = $request->event_date_time;
        $data['event_place'] = $request->event_place;
        $data['event_price'] = $request->event_price;
        $data['event_content'] = $request->event_content;
        $data['event_map'] = $request->event_map;
        $get_img = $request->file('event_image');
        if($get_img){
            $get_name_img = $get_img->getClientOriginalName();
            $name_img = current(explode('.',$get_name_img));
            $new_img = $name_img.rand(0,99).'.'.$get_img->getClientOriginalExtension();
            $get_img->move('public/upload/course',$new_img);
            $data['event_image'] = $new_img;
            DB::table('event')->insert($data);
            Toastr::success('Thêm sự kiện thành công','Thông báo');
            return Redirect::to('/quantri/cacsukien');
        }
        $data['event_image'] = '';

        DB::table('event')->insert($data);
        Toastr::success('Thêm sự kiện thành công','Thông báo');
        return Redirect::to('/quantri/cacsukien');
    }

    public function edit_event($event_id)
    {
        // $this->AuthLogin();
        $edit_event = DB::table('event')->where('event_id',$event_id)->get();
        return view('admin.event.editEvent')->with('edit_event',$edit_event);
    }
    public function ediEvent(Request $request, $event_id)
    {
        $data = array();
        $data['event_title'] = $request->event_title;
        $data['event_name'] = $request->event_name;
        $data['event_date_time'] = $request->event_date_time;
        $data['event_place'] = $request->event_place;
        $data['event_price'] = $request->event_price;
        $data['event_content'] = $request->event_content;
        $data['event_map'] = $request->event_map;
        $get_img = $request->file('event_image');
        if($get_img){
            $get_name_img = $get_img->getClientOriginalName();
            $name_img = current(explode('.',$get_name_img));
            $new_img = $name_img.rand(0,99).'.'.$get_img->getClientOriginalExtension();
            $get_img->move('public/upload/course',$new_img);
            $data['event_image'] = $new_img;
            DB::table('event')->where('event_id',$event_id)->update($data);
            Toastr::success('Cập nhật sự kiện thành công','Thông báo');
            return Redirect::to('/quantri/cacsukien');
        }
        DB::table('event')->where('event_id',$event_id)->update($data);
        Toastr::success('Cập nhật sự kiện thành công','Thông báo');
        return Redirect::to('/quantri/cacsukien');
    }

    public function delete_event($event_id)
    {
        // echo "Đã xóa thành công";
        // $this->AuthLogin();
        DB::table('event')->where('event_id',$event_id)->delete();
        Toastr::error('Xóa sự kiện thành công','Thông báo');
        return Redirect::to('/quantri/cacsukien');
    }
    public function all_event()
    {
        $event = DB::table('event')->get();
        return view('admin.event.allEvent')->with('event',$event);
    }
}
