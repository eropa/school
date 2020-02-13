<?php

namespace App\Http\Controllers;

use App\Models\Groupnew;
use App\Models\Grouppage;
use App\Models\Newpost;
use App\Models\Page;
use App\Models\Pagecontact;
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
                                                'nameurl'=>$nameurl,
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
            'groupnew'=>$groupnew,'nameurl'=>$nameurl,
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

        $groupnew=Groupnew::where('school_id',$dataUrl->id)->get();
        foreach ($groupnew as $item){
            $groupid[]=$item->id;
        }
        $datanew=Newpost::wherein('groupnew_id',$groupid)->orderBy('id', 'desc')->get();

        return  view('frontsubdomen.part.newall',['option'=>$option,'groupnew'=>$groupnew,'news'=>$datanew,'nameurl'=>$nameurl]);

    }

    /**
     * Выводим новости в зависемости от группы
     * @param $nameurl
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public  function showgr($nameurl,$id){
        $dataUrl=School::where('url',$nameurl)->first();
        $option=getOptionsIdScool($dataUrl->id);

        $groupnew=Groupnew::where('school_id',$dataUrl->id)->get();
        foreach ($groupnew as $item){
            $groupid[]=$item->id;
        }
        $datanew=Newpost::where('groupnew_id',$id)->orderBy('id', 'desc')->limit(5)->get();

        return  view('frontsubdomen.part.newall',['option'=>$option,'groupnew'=>$groupnew,'news'=>$datanew,'nameurl'=>$nameurl]);
    }


    public function shownewpage($nameurl,$id){
        $dataUrl=School::where('url',$nameurl)->first();
        $option=getOptionsIdScool($dataUrl->id);
        $datanew=Newpost::find($id);
        $groupnew=Groupnew::where('school_id',$dataUrl->id)->get();
        foreach ($groupnew as $item){
            $groupid[]=$item->id;
        }
        return  view('frontsubdomen.part.shownew',['option'=>$option,
            'groupnew'=>$groupnew,'nameurl'=>$nameurl,
            'news'=>$datanew,'nameurl'=>$nameurl]);
    }

    public function showpage($nameurl,$id){
        $dataUrl=School::where('url',$nameurl)->first();
        $option=getOptionsIdScool($dataUrl->id);
        $datanew=Page::find($id);
        $groupnew=Groupnew::where('school_id',$dataUrl->id)->get();
        foreach ($groupnew as $item){
            $groupid[]=$item->id;
        }
        return  view('frontsubdomen.part.showpage',['option'=>$option,
            'groupnew'=>$groupnew,'nameurl'=>$nameurl,
            'news'=>$datanew,'nameurl'=>$nameurl]);
    }

    public function showgrpage($nameurl,$id){
        $dataUrl=School::where('url',$nameurl)->first();
        $option=getOptionsIdScool($dataUrl->id);
        $datanew=Grouppage::find($id);
        $groupnew=Groupnew::where('school_id',$dataUrl->id)->get();
        foreach ($groupnew as $item){
            $groupid[]=$item->id;
        }
        return  view('frontsubdomen.part.showgrpage',['option'=>$option,
            'groupnew'=>$groupnew,'nameurl'=>$nameurl,
            'news'=>$datanew,'nameurl'=>$nameurl]);
    }

    public function contactpage($nameurl){

        $dataUrl=School::where('url',$nameurl)->first();

        $option=getOptionsIdScool($dataUrl->id);
        //dd($dataUrl->id);
        $datanew=Pagecontact::where('school_id',$dataUrl->id)->first();

        $groupnew=Groupnew::where('school_id',$dataUrl->id)->get();
        foreach ($groupnew as $item){
          $groupid[]=$item->id;
        }
        return  view('frontsubdomen.part.contact',['option'=>$option,
           'groupnew'=>$groupnew,'nameurl'=>$nameurl,
           'news'=>$datanew,'nameurl'=>$nameurl]);
    }




}
