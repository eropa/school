<?php

namespace App\Http\Controllers;

use App\Models\Groupnew;
use App\Models\Newpost;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolPageController extends Controller
{
    public function index($nameurl){
        $dataUrl=School::where('url',$nameurl)->first();
        $option=getOptionsIdScool($dataUrl->id);
        $groupnew=Groupnew::where('school_id',$dataUrl->id)->get();
        foreach ($groupnew as $item){
            $groupid[]=$item->id;
        }
        $news=Newpost::wherein('groupnew_id',$groupid)->orderBy('id', 'desc')->limit(5)->get();

        return view('frontsubdomen.index',['option'=>$option,
                                                'news'=>$news,
                                                'groupnew'=>$groupnew]);
    }
}