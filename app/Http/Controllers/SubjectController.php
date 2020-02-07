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

}
