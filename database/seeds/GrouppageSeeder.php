<?php

use Illuminate\Database\Seeder;

class GrouppageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grouppages')->insert([
            'name' => "О школе",
            'html_text'=>"Тут текст о школе",
            'menu'=>"1",
            'school_id' => 6,
        ]);
        DB::table('grouppages')->insert([
            'name' => "Наши достижения",
            'html_text'=>"Достижение школы",
            'menu'=>"1",
            'school_id' => 6,
        ]);






    }
}
