<?php

use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
            'name' => 'email',
            'value' => 'school2@local.local',
            'school_id' => '2',
        ]);
        DB::table('options')->insert([
            'name' => 'logo',
            'value' => 'logo2.png',
            'school_id' => '2',
        ]);
        DB::table('options')->insert([
            'name' => 'phone',
            'value' => '+(373) 555 4-44-44',
            'school_id' => '2',
        ]);
        DB::table('options')->insert([
            'name' => 'title',
            'value' => 'МГУП РСООШ школа 2',
            'school_id' => '2',
        ]);
        DB::table('options')->insert([
            'name' => 'slaid1',
            'value' => 'Текст слайд1',
            'school_id' => '2',
        ]);
        DB::table('options')->insert([
            'name' => 'slaid2',
            'value' => 'Текст слайд2',
            'school_id' => '2',
        ]);
        DB::table('options')->insert([
            'name' => 'slaid3',
            'value' => 'Текст слайд3',
            'school_id' => '2',
        ]);


        DB::table('options')->insert([
            'name' => 'email',
            'value' => 'school6@local.local',
            'school_id' => '6',
        ]);
        DB::table('options')->insert([
            'name' => 'phone',
            'value' => '+(373) 555 6-46-46',
            'school_id' => '6',
        ]);
        DB::table('options')->insert([
            'name' => 'logo',
            'value' => 'logo6.png',
            'school_id' => '6',
        ]);
        DB::table('options')->insert([
            'name' => 'title',
            'value' => 'МГУП РСООШ школа 6',
            'school_id' => '6',
        ]);
        DB::table('options')->insert([
            'name' => 'slaid1',
            'value' => 'Текст слайд1 6',
            'school_id' => '6',
        ]);
        DB::table('options')->insert([
            'name' => 'slaid2',
            'value' => 'Текст слайд2 6',
            'school_id' => '6',
        ]);
        DB::table('options')->insert([
            'name' => 'slaid3',
            'value' => 'Текст слайд3 6',
            'school_id' => '6',
        ]);

    }
}
