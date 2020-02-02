<?php

use Illuminate\Database\Seeder;

class GroupnewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groupnews')->insert([
            'name' => "Школьная дума",
            'school_id' => 6,
        ]);
        DB::table('groupnews')->insert([
            'name' => "Нащи достижение",
            'school_id' => 6,
        ]);
        DB::table('groupnews')->insert([
            'name' => "Начальная школа",
            'school_id' => 6,
        ]);
        DB::table('groupnews')->insert([
            'name' => "Конкурс и положение",
            'school_id' => 6,
        ]);
        DB::table('groupnews')->insert([
            'name' => "Нащи достижение",
            'school_id' => 2,
        ]);
        DB::table('groupnews')->insert([
            'name' => "Начальная школа",
            'school_id' => 2,
        ]);
        DB::table('groupnews')->insert([
            'name' => "Конкурс и положение",
            'school_id' => 2,
        ]);

    }
}
