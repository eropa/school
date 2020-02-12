<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

    /**
     * Список всех
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $datas=Subject::all();
        return view('back.subject.index',['datas'=>$datas]);
    }


    /**
     * Форма редактирования
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){
        return view('back.subject.create');
    }


    /**
     * Форма редактирование
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function  edit($id){
        $data=Subject::find($id);
        return view('back.subject.edit',['data'=>$data]);
    }


    /**
     * Новая запись
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function story(Request $request){
        $model=new Subject();
        $model->name=$request->input('name');
        $model->save();
        return redirect()->route('subjects.list')->with('status', 'Создана запись!');
    }

    /**
     * Удаление записи
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id){
        Subject::destroy($id);
        return redirect()->route('subjects.list')->with('status', 'Запись удалена!');
    }

    public function update(Request $request,$id){
        $model=Subject::find($id);
        $model->name=$request->input('name');
        $model->save();
        return redirect()->route('subjects.list')->with('status', 'Запись изменина');
    }


}
