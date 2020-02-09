<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UsersTableSeeder::class);
        $this->call(SchoolSeeder::class);
        $this->call(UserSchoolSeeder::class);
        $this->call(OptionSeeder::class);
        $this->call(GroupnewSeeder::class);
        $this->call(NewpostSeeder::class);
        $this->call(GrouppageSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(SchoolclassSeeder::class);
        $this->call(PupilSeeder::class);
        $this->call(ClasspupilSeeder::class);
    }
}
