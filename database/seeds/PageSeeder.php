<?php

use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('pages')->insert([
            'name' => 'Контактная информация',
            'slug' => 'contactinfo',
            'texthtml'=>'Директор:  
       Романовская Наталья Викторовна',
            'grouppage_id' => '1',
        ]);

        DB::table('pages')->insert([
            'name' => 'Педагогический коллектив',
            'slug' => 'pedagorschol',
            'texthtml'=>'ФИО
Акинина Оксана Борисовна
Бабий Ольга Сергеевна
Быкова Галина Николаевна',
            'grouppage_id' => '1',
        ]);

        DB::table('pages')->insert([
            'name' => 'Правила поведения учащихся',
            'slug' => 'pravila',
            'texthtml'=>'ФИО
Акинина Оксана Борисовна
Бабий Ольга Сергеевна
Быкова Галина Николаевна',
            'grouppage_id' => '1',
        ]);


        DB::table('pages')->insert([
            'name' => 'Атрибутика школы',
            'slug' => 'atributi',
            'texthtml'=>'Значения цветов флага:
Белый - символ чистоты и совершенства.
Голубой - мир, спокойствие, мудрость, уравновешенность.
Синий - преданность, справедливость, независимость.
Фиолетовый - цвет высшей доброты, любви, мудрости.',
            'grouppage_id' => '1',
        ]);


        DB::table('pages')->insert([
            'name' => 'Атрибутика школы',
            'slug' => 'atributi',
            'texthtml'=>'Значения цветов флага:
Белый - символ чистоты и совершенства.
Голубой - мир, спокойствие, мудрость, уравновешенность.
Синий - преданность, справедливость, независимость.
Фиолетовый - цвет высшей доброты, любви, мудрости.',
            'grouppage_id' => '1',
        ]);

        DB::table('pages')->insert([
            'name' => 'История школы',
            'slug' => 'history',
            'texthtml'=>'Школа  открыта 1 сентября 1964 года. Школа с углубленным изучением английского языка.

С 1975 года – общеобразовательная школа.

В 2000 году  по решению сессии городского и районного Совета народных депутатов школа получила новый статус– «средняя школа с лицейскими классами».

В 2006 году родители учащихся школы создали общественную организацию «В поддержку МОУ «РРСОШ №6 с л.к.» «Будущее в детях». Председатель организации: Бобок Людмила Владимировна.

С 2009-2010 учебного года в школе работает орган ученического соуправления «Школьная Дума».

В 2011 году по итогам аттестации школе присвоена высшая категория образовательного учреждения. В этом же году  школа принимала участие в конкурсе «Русская школа-шаг в будущее», в котором заняла I место.

С 2011 года  школа занимает  I  место в рейтинге среди средних школ  повышенного уровня . В рамках  российско-приднестровского проекта   «Лучшая русская школа за рубежом » стала победителем, ежемесячно выпускается школьная газета «Родная 6-я».

В 2011-2012 учебном году учащиеся школы  на олимпиадах II тура заняли 39 призовых мест, на республиканской олимпиаде  - 4 призовых места.

В феврале 2012 года школа принимала делегацию Россотрудничества в Республике Молдова. Участвует в Республиканском конкурсе на получение государственных грандов общественными  объединениями , в номинации «Мои родники», школа стала призером  и получила гранд в размере 30 тысяч рублей , стала победителем  и призером республиканского конкурса «Авторская песня», школьная команда «Исток» заняла  II место на IV республиканском чемпионате «Исток -2012».

В 2013- 2014 учебном году школа заняла I место среди школ города и района в предметных олимпиадах (49 призовых мест), 4 места в республиканских олимпиадах.

С 2013 года  стали побратимы  с  Государственным  бюджетным  общеобразовательным учреждением города Москвы "Школа № 1286"

25 октября 2014 года школа отметила полувековой юбилей . За 50 лет работы школы ее окончили 2725 выпускников, из них 109 с золотой медалью и 136 с серебряной медалью, что составляет  9% от всех выпускников.

Ученики школы 2014-2015 учебном году заняли 52 призовых места на олимпиадах  и 25 призовых мест на научно-практических конференциях исследовательского общества учащихся II  тура .На республиканских олимпиадах и конференциях заняли 12 призовых мест.

В 2015-2016  учебном году ученики школы заняли 53 места на олимпиадах , ученики начальной школы заняли 4 призовых места на научно-практических конференциях исследовательского общества II  тура. На республиканских олимпиадах  выпускники 11 класса заняли 4 призовых места.

В 2016-2017  учебном году ученики школы заняли 61призовое  место на городской олимпиаде  и 3 призовых места на республиканской олимпиаде. В городской научно-практической  конференции  исследовательского общества учащихся -20 призовых мест. На республиканской  научно-практической  конференции  исследовательского общества учащихся -5 призовых мест. В республиканском фестивале  гражданско - патриотической направленности  «Мы этой памяти верны» на тему  «Россия, Приднестровье, единство» заняли I место. В республиканском конкурсе «Юность. Творчество. Талант»в номинации «Виды декоративно-прикладного творчества России» -ГРАН-ПРИ. В республиканском конкурсе «Юность. Творчество. Талант»в номинации «Приднестровские звезды»- вокально- хореографическая композиция «Живи , расцветай , Приднестровье»-ГРАН-ПРИ.

В республиканском конкурсе «Я люблю родной край»в номинации «Видеоклип на песню» -ГРАН-ПРИ. Школьная команда «Доминанта»  заняла  II  место в республиканском конкурсе «Исток 2017».В республиканской спартакиаде волейбольная команда школы заняла II , команда по шахматам  I , команда по шашкам III место.

С 2017 года  приняты в члены Международного союза «Наследники Победы».',
            'grouppage_id' => '1',
        ]);

        DB::table('pages')->insert([
            'name' => 'Школьная документация',
            'slug' => 'schooldocument',
            'texthtml'=>'Школьная документация',
            'grouppage_id' => '1',
        ]);

    }
}