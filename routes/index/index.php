<?php


Route::group(['prefix' => 'index'], function () {

    // 前台首页展示
    Route::get('/fe', 'IndexController@IndexFE');
    // 后台首页展示
    Route::get('/mb', 'IndexController@IndexMB');
});
