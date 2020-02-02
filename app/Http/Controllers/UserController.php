<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Показать список пользователей
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ListUser(){
        $dataUsers=User::all();
        return view('back.user.index',['dataUsers'=>$dataUsers]);
    }

    /**
     * Показать форму добавления
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){
        return view('back.user.create');
    }


    /**
     * Форма для редактирования
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id=0){
        // Данные пользователя
        $data=User::find($id);
        // Проверка если пустой
        if(is_null($data)){
            abort(404);
        }
        // получаем все данные
        $schools=School::all();
        // Возврошаем форму
        return view('back.user.edit',['data'=>$data,
                                            'schools'=>$schools]);
    }

}
