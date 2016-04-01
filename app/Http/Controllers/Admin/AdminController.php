<?php
/**
 *   首页
 */
namespace App\Http\Controllers\Admin;   //命名空间  属于该路径（空间）下的的类

use App\Http\Controllers\Controller;

class AdminController extends Controller
{


    /**
     * 显示关于界面
     */
    public function gitAbout(){
        return view('about');
    }
}
