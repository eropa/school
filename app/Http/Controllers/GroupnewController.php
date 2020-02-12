<?php

namespace App\Http\Controllers;

use App\Models\Groupnew;
use Illuminate\Http\Request;

class GroupnewController extends Controller
{

    /**
     * Список групп
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $saitID=getSiteSchoolID();
        $datas=Groupnew::where('school_id',$saitID)->get();

        return view('back.groupnew.index',['datas'=>$datas]);
    }

    /**
     * создать
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){
        return view('back.groupnew.create');
    }

    /**
     * Редактирование
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $data=Groupnew::find($id);
        return view('back.groupnew.edit',['data'=>$data]);
    }

    /**
     * Добовляем параметры
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function story(Request $request){
        $saitID=getSiteSchoolID();
        $model=new Groupnew();
        $model->name=$request->input('name');
        $model->school_id=$saitID;
        $model->save();
        return redirect()->route('group.list')->with('status', 'Добавили запись');
    }

    /**
     * Удаление записи
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id){
        Groupnew::destroy($id);
        return redirect()->route('group.list')->with('status', 'Запись удалена');
    }

    public function update(Request $request,$id){
        $model=Groupnew::find($id);
        $model->name=$request->input('name');
        $model->save();
        return redirect()->route('group.list')->with('status', 'Обновили запись');
    }

}
