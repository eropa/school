<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ivanov I.V.',
            'email' => 'admin@local.local',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        for($i=0;$i<2;$i++){
            DB::table('users')->insert([
                'name' => 'Manager'.$i,
                'email' => 'manager'.$i.'@local.local',
                'password' => Hash::make('password'),
                'role' => 'meneger',
            ]);
        }

        for($i=0;$i<2;$i++){
            DB::table('users')->insert([
                'name' => 'Teacher'.$i,
                'email' => 'teacher'.$i.'@local.local',
                'password' => Hash::make('password'),
                'role' => 'teacher',
            ]);
        }

        for($i=0;$i<20;$i++){
            DB::table('users')->insert([
                'name' => 'Parent'.$i,
                'email' => 'parent'.$i.'@local.local',
                'password' => Hash::make('password'),
                'role' => 'parent',
            ]);
        }
    }
}
