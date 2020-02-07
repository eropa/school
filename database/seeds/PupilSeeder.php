<?php

use Illuminate\Database\Seeder;

class PupilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pupils')->insert(
            ['name' => 'Иванов И.В.']);

        DB::table('pupils')->insert(
            ['name' => 'Петрова И.А.']);

        DB::table('pupils')->insert(
            ['name' => 'Иванова И.А.']);

        DB::table('pupils')->insert(
            ['name' => 'Иванов И.А.']);


    }
}
