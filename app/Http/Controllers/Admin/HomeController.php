<?php
/**
 *   首页
 */
namespace App\Http\Controllers\Admin;   //命名空间  属于该路径（空间）下的的类

use App\Http\Controllers\Admin\AdminController;

class HomeController extends AdminController
{
    /**
     * 首页
     */
    public function index()
	{
		return view('home');
	}

    /**
     * 显示关于界面
     */
    public function gitAbout(){

        return view('about');
    }
}
