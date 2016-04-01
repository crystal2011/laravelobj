<?php
/**
 *   首页
 */
namespace App\Http\Controllers\Home;   //命名空间  属于该路径（空间）下的的类

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * 首页
     */
    public function index()
	{
echo 3431111;
		return view('home');
	}

    /**
     * 显示关于界面
     */
    public function gitAbout(){
        return view('about');
    }
}
