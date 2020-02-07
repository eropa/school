<?php

use Illuminate\Database\Seeder;

class SchoolclassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schoolclasses')->insert(
            ['name' => 'Класс 11а','school_id'=>6]);
        DB::table('schoolclasses')->insert(
            ['name' => 'Класс 11б','school_id'=>6]);
    }
}
