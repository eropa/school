<?php

namespace App\Http\Controllers;

use App\Models\Schoolclass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SchoolclassController extends Controller
{

    /**
     * Список классов
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $idSchool=Auth::user()->school->school_id;
        $datas=Schoolclass::where('school_id',$idSchool)->get();
        return view("back.schoolclass.index",['datas'=>$datas]);
    }

    /**
     * Создать
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){
        return view("back.schoolclass.create");
    }

    /**
     * Редактировать
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $data=Schoolclass::find($id);
        return view("back.schoolclass.edit",['data'=>$data]);
    }


    public function resultform(){
        return view("back.schoolclass.resultenter");
    }

    /**
     * Новый класс
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function story(Request $request){
        $idSchool=Auth::user()->school->school_id;
        $model=new Schoolclass();
        $model->name=$request->input('name');
        $model->school_id=$idSchool;
        $model->save();
        return redirect()->route('class.list');
    }


    /***
     * Обновляем название
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,$id){
        $model=Schoolclass::find($id);
        $model->name=$request->input('name');
        $model->save();
        return redirect()->route('class.list');
    }

}
