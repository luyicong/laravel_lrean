<?php
/**
 * Created by LYC123.
 * User: LYC123
 * Date: 2017/9/22
 * Time: 15:34
 */
//定义一个组，admin组，表示后台组
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    //后台登录路由

    //后台登录视图
    Route::get('/login','EntryController@loginForm');
    //后台登录post请求
    Route::post('login','EntryController@login');
});