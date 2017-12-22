<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//首页
Route::get('/', 'WelcomeController@index');
//登入   登出
Route::get('login', [
    'middleware' => 'guest', 'as' => 'login', 'uses' => 'loginController@loginGet']);
Route::post('login', [
    'middleware' => 'guest', 'uses' => 'loginController@loginPost']);
Route::get('logout', [
    'middleware' => 'auth', 'as' => 'logout', 'uses' => 'loginController@logout']);

//学生登陆
Route::get('stu/home', [
    'as' => 'stu_home', 'uses' => 'Stu\StudentController@home']);
Route::get('stu/edit', [
    'as' => 'stu_edit', 'uses' => 'Stu\StudentController@edit']);
Route::post('stu/update', [
    'as' => 'stu_update', 'uses' => 'Stu\StudentController@update']);

#查看成绩排名
Route::get('admin/grade', [
    'as' => 'grade_list', 'uses' => 'Admin\GradeController@index']);
#上传分数
Route::post('admin/upload_grade', [
    'as' => 'upload_grade', 'uses' => 'Admin\AdminController@upload_grade']);
#资源控制器,学生的增删改查
Route::resource('admin', 'Admin\AdminController');


//Route::get('name/{name}/{age}',function($name,$age){
//    return 'Im '.$name.'Im'.$age.'years old';
//});

//Route::get('name/','UserController@name');
//Route::get('home/','HomeController@home');
//
//Route::get('/young/{age}','UserController@young')-> middleware('young');
//
//Route::get('error',function (){
//    return view('errors.503');
//});

//home page
//Route::get('/','StaticPagesController@home')->name("home");
//Route::get('/about','StaticPagesController@about')->name("about");


