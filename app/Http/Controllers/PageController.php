<?php

namespace App\Http\Controllers;

use App\Models\Grouppage;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{

    /**
     * Главная страница
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function main(){
        return view('index');
    }


    /**
     * Список новостей
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $school_id=getSiteSchoolID();
        $groupnew=Grouppage::where('school_id',$school_id)->get();
        foreach ($groupnew as $item){
            $groupid[]=$item->id;
        }
        $datas=Page::wherein('grouppage_id',$groupid)->orderBy('id', 'desc')->get();
        return view('back.page.index',['datas'=>$datas]);
    }

    /**
     * Создать
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){
        $school_id=getSiteSchoolID();
        $grouppage=Grouppage::where('school_id',$school_id)->get();
        return view('back.page.create',['grouppage'=>$grouppage]);
    }

    public function edit($id){
        $data=Page::find($id);
        $school_id=getSiteSchoolID();
        $grouppage=Grouppage::where('school_id',$school_id)->get();
        return view('back.page.edit',['data'=>$data,'grouppage'=>$grouppage]);
    }

}
