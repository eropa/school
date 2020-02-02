<?php

namespace App\Http\Controllers;

use App\Models\Groupnew;
use App\Models\Newpost;
use Illuminate\Http\Request;

class NewpostController extends Controller
{

    /**
     * Спиоск новостей
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $school_id=getSiteSchoolID();
        $groupnew=Groupnew::where('school_id',$school_id)->get();
        foreach ($groupnew as $item){
            $groupid[]=$item->id;
        }
        $news=Newpost::wherein('groupnew_id',$groupid)->orderBy('id', 'desc')->limit(5)->get();
        return view('back.newpost.index',['news'=>$news]);
    }


    /**
     * создать форму
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){
        $school_id=getSiteSchoolID();
        $groupnew=Groupnew::where('school_id',$school_id)->get();
        return view('back.newpost.create',['groupnew'=>$groupnew]);
    }

    public function edit($id){
        $data=Newpost::find($id);
        $school_id=getSiteSchoolID();
        $groupnew=Groupnew::where('school_id',$school_id)->get();
        return view('back.newpost.edit',['data'=>$data,'groupnew'=>$groupnew]);
    }

}
