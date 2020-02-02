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

        return view('back.grouppage.index',['datas'=>$datas]);
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

}
