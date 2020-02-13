<?php

namespace App\Http\Controllers;

use App\Models\Groupnew;
use App\Models\Grouppage;
use Illuminate\Http\Request;

class GrouppageController extends Controller
{
    /**
     * список групп
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $saitID=getSiteSchoolID();
        $datas=Grouppage::where('school_id',$saitID)->get();
        return view('back.grouppage.index',['datas'=>$datas]);
    }


    /**
     * Редактировать
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $data=Grouppage::find($id);
        return view('back.grouppage.edit',['data'=>$data]);
    }


    /**
     * Создать
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){
        return view('back.grouppage.create');
    }

    /**
     * Создание записи
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function story(Request $request){
        $saitID=getSiteSchoolID();
        $model=new Grouppage();
        $model->name=$request->input('name');
        $model->school_id=$saitID;
        $model->html_text=$request->input('editor1');
        if($request->input('menu')==null){
            $model->menu=0;
        }else{
            $model->menu=1;
        }
        $model->save();
        return redirect()->route('grouppage.list')->with('status', 'Запись создана');
    }

    /**
     * Удалить запись
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id){
        Grouppage::destroy($id);
        return redirect()->route('grouppage.list')->with('status', 'Запись удалена');
    }

    /**
     * Обновления данных
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,$id){
        $model=Grouppage::find($id);
        $model->name=$request->input('name');
        $model->html_text=$request->input('editor1');
        if($request->input('menu')==null){
            $model->menu=0;
        }else{
            $model->menu=1;
        }
        $model->save();
        return redirect()->route('page.list')->with('status', 'Запись изменина');
    }



}
