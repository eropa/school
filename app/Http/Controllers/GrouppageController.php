<?php

namespace App\Http\Controllers;

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
}
