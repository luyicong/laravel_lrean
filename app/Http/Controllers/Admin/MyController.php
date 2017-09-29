<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyController extends Controller
{
    //修改密码视图
    public function passwordForm(){
        return view('admin.my.passwordForm');
    }
    public function updatePwd(AdminPost $request){
        echo '33333333';
    }
}
