<?php
/**
 *   首页
 */
namespace App\Http\Controllers\Admin;   //命名空间  属于该路径（空间）下的的类
use App\Http\Controllers\Controller;
use App\Model;
class LoginController extends Controller
{
    /**
     * 登录页
     */
    public function login()
	{
        $mAdmin = new Model\AdminModel();
        $sn = $mAdmin->where('userid','>=',1)->orderBy('userid','desc')->get()->toArray();

		return view('admin/login');
	}

}
