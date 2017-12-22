<?php

namespace App\Http\Controllers\Stu;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
//    public function home(){
//        return view('stu.home');
//    }

public function home(){
    $grade = Auth::user()->grade;

    return view('stu.home', compact('grade'));
}
    public function edit(){
        return view('stu.edit');
    }

    public  function update(Request $request){
        $this->validate($request,[
            'phone' => 'required|digits:11',
            'pro_class'=>'required',
            'email'=>'required|email'
        ]);
        Auth::user()->update($request->all());
        return Redirect::route('stu_home');
    }
}
