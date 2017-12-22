<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudents2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function(Blueprint $table)
        {
            $table->integer('id')->unique()->unsigned();  #学号,唯一,取正数
            $table->string('name');                       #姓名
            $table->string('password');                   #密码
            $table->string('phone')->default('');  #手机 默认为空(不是可以为空,值为'')
            $table->string('sex')->default('');    #性别 同上
            $table->string('email')->default('');  #邮箱 同上
            $table->string('pro_class')->default(''); #班级 同上
            $table->boolean('is_admin')->default(0);  #是否为管理员 默认为学生
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
