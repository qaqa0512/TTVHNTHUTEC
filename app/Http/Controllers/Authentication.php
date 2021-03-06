<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use Yoeunes\Toastr\Facades\Toastr;

use function PHPUnit\Framework\isEmpty;

class Authentication extends Controller
{
    //Login - Register get
    public function getLogin()
    {
        return view('authen.login');
    }

    public function getRegister()
    {
        return view('authen.register');
    }
    //Login - Register post  
    public function postLogin(Request $request)
    {
        $user = Auth::user();
        request()->validate([
            'email' => 'required',
            'password' => 'required|min:6|max:32',
        ],
        [
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Email chưa đúng định dạng',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'email.required' => 'Bạn chưa nhập email',
            'password.min' => 'Mật khẩu phải ít nhất 6 ký tự',
            'password.max' => 'Mật khẩu phải không quá 32 ký tự'
        ]);
     
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                // Authentication passed...
                Toastr::success('Đăng nhập thành công','Thông báo');
                return redirect()->intended('/');
            }
        return redirect('/dangnhap')->with('message','Tài khoản hoặc mật khẩu không chính xác!');
    }

    public function postRegister(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ],
        [
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Email chưa đúng định dạng',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'email.required' => 'Bạn chưa nhập email',
            'password.min' => 'Mật khẩu phải ít nhất 6 ký tự',
            'password.max' => 'Mật khẩu phải không quá 32 ký tự'
        ]);
        $data = $request->all();
        $check = $this->create($data);

        return redirect('/dangnhap')->with('message','Đăng kí thành công!!!');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    // Logout
    public function Logout()
    {
        Auth::logout();
        // Session::flush();
        return redirect('/');   
    }
}
