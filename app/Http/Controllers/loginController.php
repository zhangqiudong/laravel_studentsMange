<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class loginController extends Controller
{
    public function loginGet(){
        return view('login');
    }

    public function loginPost(Request $request){
        $this ->validate($request,students::rules());
        $id = $request ->get('id');
        $password = $request ->get('password');
        if (Auth::attempt(['id' => $id,'password' => $password],$request ->get('remember'))){
            if(!Auth::user()->is_admin){
//                return Redirect::route('stu_home');
                return Redirect::route('stu_home');
            }
            else{
                return Redirect::route('Admin/AdminController@index');
            }
        }
        else{
            return Redirect::route('login')
            ->withInput()
                ->withErrors('学号或者密码错误，请重新输入！');

        }
    }

    public function logout(){
        if(Auth::check()){
            Auth::logout();
        }
        return Redirect::route('login');
    }
}
