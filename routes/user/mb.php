<?php

Route::group(['prefix'=>'user/mb'],function (){
    // 展示所有用户
    Route::get('/index', 'MBUserController@index');
    // 创建用户
    Route::get('/add', 'MBUserController@add');
    // 更新用户
    Route::get('/edit', 'MBUserController@edit');
    // 删除用户
    Route::get('/delete', 'MBUserController@delete');
    // 登陆
    Route::get('/login', 'MBUserController@login');
    // 注册
    Route::get('/logout', 'MBUserController@logout');
    // 获取电话号码:电话开始隐藏
    //  1。注册账户才显示出来
    //  2。必须登陆才能显示
    //  3. 可选 a.缴费0.1毛
    Route::get('/logout', 'MBUserController@logout');

    //
});
