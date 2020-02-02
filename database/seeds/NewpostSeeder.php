<?php

use Illuminate\Database\Seeder;

class NewpostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('newposts')->insert([
            'name' => "Тестовая запись",
            'groupnew_id' => 2,
            'slug' => 'Tectovai_zapis',
            'textsmallhtml' => 'Привет мир16',
            'textsfullhtml' => 'Привет мир16',
            'foto' => '',
        ]);
        DB::table('newposts')->insert([
            'name' => "Тестовая запись1",
            'groupnew_id' => 2,
            'slug' => 'Tectovai_zapis1',
            'textsmallhtml' => 'Привет мир16',
            'textsfullhtml' => 'Привет мир16',
            'foto' => '',
        ]);
        DB::table('newposts')->insert([
            'name' => "Тестовая запись3",
            'groupnew_id' => 2,
            'slug' => 'Tectovai_zapis1',
            'textsmallhtml' => 'Привет мир16',
            'textsfullhtml' => 'Привет мир16',
            'foto' => '',
        ]);
        DB::table('newposts')->insert([
            'name' => "Тестовая запись4",
            'groupnew_id' => 2,
            'slug' => 'Tectovai_zapis1',
            'textsmallhtml' => 'Привет мир16',
            'textsfullhtml' => 'Привет мир16',
            'foto' => '',
        ]);
        DB::table('newposts')->insert([
            'name' => "Тестовая запись5",
            'groupnew_id' => 2,
            'slug' => 'Tectovai_zapis1',
            'textsmallhtml' => 'Привет мир16',
            'textsfullhtml' => 'Привет мир16',
            'foto' => '',
        ]);
        DB::table('newposts')->insert([
            'name' => "Тестовая запись6",
            'groupnew_id' => 2,
            'slug' => 'Tectovai_zapis1',
            'textsmallhtml' => 'Привет мир16',
            'textsfullhtml' => 'Привет мир16',
            'foto' => '',
        ]);
    }
}
