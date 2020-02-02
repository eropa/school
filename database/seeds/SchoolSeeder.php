<?php

use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<16;$i++){
            DB::table('schools')->insert([
                'name' => 'Школа №'.$i,
                'fullname' => 'МОУ РССОШ Школа №'.$i,
                'about' => 'Тут описание школы №'.$i,
                'url' => 'school'.$i,
            ]);
        }
    }
}
