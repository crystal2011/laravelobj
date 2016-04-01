<?php

/**
 * @name 路由
 * @param 规则：
 *
 */

Route::get('/','Home\HomeController@index');

Route::get('/home','Home\HomeController@index');


Route::get('/moadmin','Admin\HomeController@index'); //后台
Route::get('/moadmin/login/','Admin\LoginController@login'); //后台登录


