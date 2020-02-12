<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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


    /**
     * Создание пользователя в БАЗЕ ДАННЫХ
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function story(Request $request){
        $user=new User();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->role=$request->input('role');
        $user->save();
        return redirect()->route('user.list')->with('status', 'Создана запись!');;
    }

    /**
     * Запись удалена
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id){
        User::destroy($id);
        return redirect()->route('user.list')->with('status', 'Запись удалена!');
    }


    /**
     * Обновление данных
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,$id){
        $user=User::find($id);
        if($request->input('typeupdate')==1){
            $user->name=$request->input('name');
            $user->role=$request->input('role');
        }else{
            $user->password=Hash::make($request->input('password'));
        }
        $user->save();
        return redirect()->route('user.list')->with('status', 'Запись изменина!');;
    }

}
