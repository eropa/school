<?php

use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert(
            ['name' => 'Математика']);
        DB::table('subjects')->insert(
            ['name'=>'Русский язык']);
        DB::table('subjects')->insert(
            ['name'=>'Информатика']);
        DB::table('subjects')->insert(
            ['name'=>'Иностранный язык(Англ.яз)']);
    }
}
