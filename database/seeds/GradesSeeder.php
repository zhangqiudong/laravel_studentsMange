<?php

use Illuminate\Database\Seeder;
use App\Grade;
class GradesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::create([
            'user_id' => 1210311233,
            'math'    => 90,
            'english'    => 88,
            'c'    => 86,
            'sport'    => 75,
            'think'    => 89,
            'soft'    => 88,
        ]);
    }
}
