<?php


Route::domain('{nameurl}.rybruno.ru')->group(function () {
    Route::get('/', 'SchoolPageController@index');
});

// Главная страница
Route::get('/', function () {
    return view('back.index');
});



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
        Route::get('/user/{id?}','UserController@edit')->name('user.edit');

        /**
         * Школы
         */
        Route::get('/school','SchoolController@index')->name('school.list');
        Route::get('/school/create','SchoolController@create')->name('school.create');
        Route::get('/school/{id?}','SchoolController@edit')->name('school.edit');

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


        Route::get('/page','PageController@index')->name('page.list');
        Route::get('/page/create','PageController@create')->name('page.create');
        Route::get('/page/{id?}','PageController@edit')->name('page.edit');

        Route::get('/contactpage','PagecontactController@edit')->name('pagecontact.edit');
    });

});









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
