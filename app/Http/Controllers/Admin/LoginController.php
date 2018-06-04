<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends CommonController
{
    public function login(){
        // echo "Login page";
        return view('admin.login');//文件在resource/views/admin/login.blade.php
    }
}
