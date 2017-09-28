<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 15:34
 */

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    //后台登录路由
    Route::get('/login','EntryController@loginForm');
});