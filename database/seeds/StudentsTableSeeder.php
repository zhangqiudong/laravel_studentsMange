<?php

use Illuminate\Database\Seeder;
use App\User;
use App\students;
use App\Grade;

class StudentsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('students')->delete();

        students::create([
            'id' => 1210311232,
            'name' => '李锐',
            'password' => Hash::make('1210311232')
        ]);

        students::create([
            'id' => 1210311233,
            'name' => '陈曦',
            'password' => Hash::make('1210311233')
        ]);

        students::create([
            'id' => 1234567890,
            'name' => '管理员',
            'password' => Hash::make('root'),
            'is_admin' => 1
        ]);

    }
}