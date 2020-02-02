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

}
