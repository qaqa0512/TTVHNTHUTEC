<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
use Yoeunes\Toastr\Facades\Toastr;
use Session;

class ContactController extends Controller
{
    public function addContact(Request $request)
    {
        if(Auth::check()){     
            $data = array();
            $data['user_id'] = Auth::user()->id;
            $data['contact_name'] = $request->contact_name;
            $data['contact_email'] = $request->contact_email;
            $data['contact_content'] = $request->contact_content;
            DB::table('contact')->insert($data);
            Toastr::success('Cảm ơn bạn đã gửi thông tin đến chúng tôi!','Thông báo');
            return back();
        }
        else{
            return redirect('/dangnhap');
        }
    }

    public function displayContact()
    {
        $contact = DB::table('contact')->get();
        return view('admin.contact.allContact')->with('contact',$contact);
    }
}
