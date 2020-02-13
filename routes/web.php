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
         * Предметы
         */
        Route::get('/subjects','SubjectController@index')->name('subjects.list');
        Route::get('/subjects/create','SubjectController@create')->name('subjects.create');
        Route::post('/subjects/create','SubjectController@story')->name('subjects.story');
        Route::get('/subjects/{id?}','SubjectController@edit')->name('subjects.edit');
        Route::post('/subjects/{id?}','SubjectController@update')->name('subjects.update');
        Route::get('/subjects/{id?}/delete','SubjectController@destroy')->name('subjects.destroy');


        /**
         * Опции сайта
         */
        Route::get('/option','OptionController@index')->name('option.list');
        Route::post('/option','OptionController@update')->name('option.update');

        /**
         * Группа новостей
         */
        Route::get('/groupnew','GroupnewController@index')->name('group.list');
        Route::get('/groupnew/create','GroupnewController@create')->name('group.create');
        Route::post('/groupnew/create','GroupnewController@story')->name('group.story');
        Route::get('/groupnew/{id?}','GroupnewController@edit')->name('group.edit');
        Route::post('/groupnew/{id?}','GroupnewController@update')->name('group.update');
        Route::get('/groupnew/{id?}/delete','GroupnewController@destroy')->name('group.destroy');


        /**
         * Новости
         */
        Route::get('/newpost','NewpostController@index1')->name('newpos.list');
        Route::get('/newpost/create','NewpostController@create')->name('newpos.create');
        Route::post('/newpost/create','NewpostController@story')->name('newpos.story');
        Route::get('/newpost/{id?}','NewpostController@edit')->name('newpos.edit');
        Route::post('/newpost/{id?}','NewpostController@update')->name('newpos.update');
        Route::get('/newpost/{id?}/delete','NewpostController@destroy')->name('newpos.destroy');

        /**
         * Группа страниц сайта
         */
        Route::get('/grouppage','GrouppageController@index')->name('grouppage.list');
        Route::get('/grouppage/create','GrouppageController@create')->name('grouppage.create');
        Route::post('/grouppage/create','GrouppageController@story')->name('grouppage.story');
        Route::get('/grouppage/{id?}','GrouppageController@edit')->name('grouppage.edit');
        Route::post('/grouppage/{id?}','GrouppageController@update')->name('grouppage.update');
        Route::get('/grouppage/{id?}/delete','GrouppageController@destroy')->name('grouppage.destroy');

        /**
         * Страницы
         */
        Route::get('/page','PageController@index')->name('page.list');
        Route::get('/page/create','PageController@create')->name('page.create');
        Route::post('/page/create','PageController@story')->name('page.story');
        Route::get('/page/{id?}','PageController@edit')->name('page.edit');
        Route::post('/page/{id?}','PageController@update')->name('page.update');
        Route::get('/page/{id?}/delete','PageController@destroy')->name('page.destroy');

        /**
         * Контакты
         */
        Route::get('/contactpage','PagecontactController@edit')->name('pagecontact.edit');





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
