<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    //

	public function getLogin()
	{
		return view('backend.login_admin');
	}
	public function postLogin(Request $request)
	{
		$arr = ['email'=>$request->email, 'password'=>$request->password];
		if (Auth::attempt($arr)) {
			return redirect()->intended('admin/home');
		}else{
			return back()->withInput()->with('error','Tài khoản hoặc mật khẩu chưa đúng!');
		}
	}
}