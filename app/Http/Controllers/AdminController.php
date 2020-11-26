<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class AdminController extends Controller
{
    public function AuthLogin()
    {
        $admin_id = session()->get('admin_id');
        if($admin_id)
        {
            return Redirect::to('/quantri');
        }else{
            return Redirect::to('/quantri/dangnhapad')->send();
        }
    }

    public function showDasboard()
    {
        $this->AuthLogin();
        return view('admin.dashboard');
    }

    public function loginAdmin()
    {
        return view('admin_login');
    }

    public function dashboard(Request $request)
    {
        $admin_email = $request->admin_email;
        $admin_password = $request->admin_password;
        
        $result = DB::table('admin_login')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($result){
            session()->put('admin_name',$result->admin_name);
            session()->put('admin_id',$result->admin_id);
            return Redirect::to('/quantri');
        }else{
            session()->put('message','Tài khoản và mật khẩu bị sai hoặc không tồn tại');
            return Redirect::to('/quantri/dangnhapad');
        }
    }

    public function dashboard_logout()
    {
        $this->AuthLogin();
        session()->put('admin_name',null);
        session()->put('admin_id',null);
        return Redirect::to('/quantri/dangnhapad');
    }

    public function registerAdmin()
    {
        return view('admin_register');
    }
}
