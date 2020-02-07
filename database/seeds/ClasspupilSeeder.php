<?php

use Illuminate\Database\Seeder;

class ClasspupilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('classpupils')->insert(
            ['pupil_id' => 1,'schoolclass_id'=>1]);
        DB::table('classpupils')->insert(
            ['pupil_id' => 2,'schoolclass_id'=>2]);
        DB::table('classpupils')->insert(
            ['pupil_id' => 3,'schoolclass_id'=>1]);
        DB::table('classpupils')->insert(
            ['pupil_id' => 4,'schoolclass_id'=>2]);
    }
}
