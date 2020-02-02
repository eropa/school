<?php

use Illuminate\Database\Seeder;

class UserSchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_schools')->insert([
            'user_id' => 2,
            'school_id' => 2,
        ]);

        DB::table('user_schools')->insert([
            'user_id' => 3,
            'school_id' => 6,
        ]);
    }
}
