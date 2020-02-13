<?php

namespace App\Http\Controllers;

use App\Models\Groupnew;
use App\Models\Newpost;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolPageController extends Controller
{
    /**
     * Главная новость
     * @param $nameurl
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($nameurl){
        $dataUrl=School::where('url',$nameurl)->first();
        $option=getOptionsIdScool($dataUrl->id);
        $groupnew=Groupnew::where('school_id',$dataUrl->id)->get();
        foreach ($groupnew as $item){
            $groupid[]=$item->id;
        }
        $news=Newpost::wherein('groupnew_id',$groupid)->orderBy('id', 'desc')->limit(5)->get();

        return view('frontsubdomen.part.index',['option'=>$option,
                                                'news'=>$news,
                                                'groupnew'=>$groupnew]);
    }

    /**
     * Покозать новость
     * @param $nameurl
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function shownew($nameurl,$id){
        $dataUrl=School::where('url',$nameurl)->first();
        $option=getOptionsIdScool($dataUrl->id);
        $datanew=Newpost::find($id);
        $groupnew=Groupnew::where('school_id',$dataUrl->id)->get();
        foreach ($groupnew as $item){
            $groupid[]=$item->id;
        }
        return  view('frontsubdomen.part.shownew',['option'=>$option,
            'groupnew'=>$groupnew,
            'news'=>$datanew,'nameurl'=>$nameurl]);
    }

    /**
     * Выводим все новости
     * @param $nameurl
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showall($nameurl){
        $dataUrl=School::where('url',$nameurl)->first();
        $option=getOptionsIdScool($dataUrl->id);
        $datanew=Newpost::orderby('id')->get();
        $groupnew=Groupnew::where('school_id',$dataUrl->id)->get();
        return  view('frontsubdomen.part.newall',['option'=>$option,'groupnew'=>$groupnew,'news'=>$datanew,'nameurl'=>$nameurl]);

    }

}
