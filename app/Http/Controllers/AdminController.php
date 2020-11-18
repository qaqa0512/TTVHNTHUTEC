<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showDasboard()
    {
        return view('admin.dashboard');
    }

    public function loginAdmin()
    {
        return view('admin_login');
    }

    public function registerAdmin()
    {
        return view('admin_register');
    }
}
