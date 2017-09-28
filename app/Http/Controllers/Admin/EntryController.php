<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class EntryController extends Controller
{
    //登录视图
    public function loginForm(){
        return view('admin.entry.login');
    }
    //登录处理
    public function login(){
//        return '22222222';

    }
}
