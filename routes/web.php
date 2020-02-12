<?php


Route::domain('{nameurl}.rybruno.ru')->group(function () {

    Route::get('/', 'SchoolPageController@index')->name('schoolfront.index');
    Route::get('/new_{id?}','SchoolPageController@shownew')->name('schoolfront.shownew');
});

// Главная страница
Route::get('/','PageController@main');



/**
 * Только авторизированным пользователям
 */
Route::middleware(['auth'])->group(function () {
    Route::prefix('upanel')->group(function () {
        Route::get('/', function () {
            return view('back.index');
        })->name('home.index');;
        /**
         * Пользователи
         */
        Route::get('/user','UserController@ListUser')->name('user.list');
        Route::get('/user/create','UserController@create')->name('user.create');
        Route::post('/user/create','UserController@story')->name('user.createpost');
        Route::get('/user/{id?}','UserController@edit')->name('user.edit');
        Route::post('/user/{id?}','UserController@update')->name('user.update');
        Route::get('/user/{id?}/delete','UserController@destroy')->name('user.destroy');

        /**
         * Школы
         */
        Route::get('/school','SchoolController@index')->name('school.list');
        Route::get('/school/create','SchoolController@create')->name('school.create');
        Route::post('/school/create','SchoolController@story')->name('school.story');
        Route::get('/school/{id?}','SchoolController@edit')->name('school.edit');
        Route::post('/school/{id?}','SchoolController@update')->name('school.update');
        Route::get('/school/{id?}/delete','SchoolController@destroy')->name('school.destroy');



        /**
         * Опции сайта
         */
        Route::get('/option','OptionController@index')->name('option.list');

        /**
         * Группа новостей
         */
        Route::get('/groupnew','GroupnewController@index')->name('group.list');
        Route::get('/groupnew/create','GroupnewController@create')->name('group.create');
        Route::get('/groupnew/{id?}','GroupnewController@edit')->name('group.edit');

        /**
         * Новости
         */
        Route::get('/newpost','NewpostController@index')->name('newpos.list');
        Route::get('/newpost/create','NewpostController@create')->name('newpos.create');
        Route::get('/newpost/{id?}','NewpostController@edit')->name('newpos.edit');

        /**
         * Группа страниц сайта
         */
        Route::get('/grouppage','GrouppageController@index')->name('grouppage.list');
        Route::get('/grouppage/create','GrouppageController@create')->name('grouppage.create');
        Route::get('/grouppage/{id?}','GrouppageController@edit')->name('grouppage.edit');

        /**
         * Страницы
         */
        Route::get('/page','PageController@index')->name('page.list');
        Route::get('/page/create','PageController@create')->name('page.create');
        Route::get('/page/{id?}','PageController@edit')->name('page.edit');

        /**
         * Контакты
         */
        Route::get('/contactpage','PagecontactController@edit')->name('pagecontact.edit');


        /**
         * Предметы
         */
        Route::get('/subjects','SubjectController@index')->name('subjects.list');
        Route::get('/subjects/create','SubjectController@create')->name('subjects.create');
        Route::get('/subjects/{id?}','SubjectController@edit')->name('subjects.edit');


        /**
         * Класс
         */
        Route::get('/class','SchoolclassController@index')->name('class.list');
        Route::get('/class/create','SchoolclassController@create')->name('class.create');
        Route::get('/class/{id?}','SchoolclassController@edit')->name('class.edit');

        /**
         * Ученики
         */
        Route::get('/pupilclass/{id?}','ClasspupilController@index')->name('pupilclass.list');

        /**
         * Учителя и закрепления
         */
        Route::get('/subjectteacher/{id?}','TeachersubjectclassController@showclass')->name('showclass.list');
        Route::get('/subjectteacher/{id?}/add','TeachersubjectclassController@showclassadd')->name('showclass.addteacjer');


        /**
         * Шаблон расписания
         */
        Route::get('/temptimetable/{id?}','TimptimetableController@index')->name('timptimetable.list');
        Route::get('/temptimetable/{id?}/{n?}/edit','TimptimetableController@edit')->name('timptimetable.edit');

        /**
         * Расписание
         */
        Route::get('/timetable/generate','TimetableController@generate')->name('timetable.generate');
        Route::get('/timetable/show','TimetableController@show')->name('timetable.show');
        Route::post('/timetable/show','TimetableController@showpost')->name('timetable.show');

        /**
         * Учитель
         */
        Route::post('/timetable/teacher','TimetableController@teacher')->name('timetable.teacher');
        Route::get('/timetable/teacher/result','SchoolclassController@resultform')->name('timetable.result');

        /**
         * Родитель успеваемость
         */
        Route::get('/parent','PupilController@parent1')->name('parent.parent1');
        Route::post('/parent','PupilController@parent2')->name('parent.parent2');

    });

});









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
