<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Получаем данные
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $datas=School::all();
        return view('back.school.index',['datas'=>$datas]);
    }

    /**
     * Форма редактирование
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $data=School::find($id);
        return view('back.school.edit',['data'=>$data]);
    }

    /**
     * Форма создание
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){
        return view('back.school.create');
    }


    /**
     * Добавление записи
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function story(Request $request){

        $model=new School();
        $model->name=$request->input('name');
        $model->fullname=$request->input('fullname');
        $model->about=$request->input('about');
        $model->url=$request->input('url');
        $model->save();

        return redirect()->route('school.list')->with('status', 'Создана запись!');;
    }


    /**
     * ЗАпись удалена
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public  function destroy($id){
        School::destroy($id);
        return redirect()->route('school.list')->with('status', 'Запись удалена!');;
    }


    public function update(Request $request,$id){
        $model=School::find($id);
        $model->name=$request->input('name');
        $model->fullname=$request->input('fullname');
        $model->about=$request->input('about');
        $model->url=$request->input('url');
        $model->save();
        return redirect()->route('school.list')->with('status', 'Запись обновлена!');;
    }
}
