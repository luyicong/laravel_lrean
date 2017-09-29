<?php

namespace App\Http\Controllers\Admin;

//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Request;

class EntryController extends Controller
{
    public function __construct(){
        $this->middleware('admin.auth')->except(['loginForm','login']);
    }
    //后台登录首页
    public function index() {
        return view('admin.entry.index');
    }
    //登录视图
    public function loginForm(){
        return view('admin.entry.login');
    }
    //登录处理
    public function login(){
        //用户认证
        $status = Auth::guard('admin')->attempt([
            'username'=>Request::input('username'),
            'password'=>Request::input('password'),
        ]);

        if($status){
            return redirect('/admin/index');
        }
        //with分配变量给前端，闪存，只分配一次，页面刷新就消失
        return redirect('/admin/login')->with('error','用户名或密码不正确！');
    }
    //退出登录
    public function logout(){
        Auth::guard('admin')->logout();

        return redirect('admin/login');
    }
}
