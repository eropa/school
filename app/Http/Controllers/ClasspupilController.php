<?php

namespace App\Http\Controllers;

use App\Models\Classpupil;
use App\Models\Pupil;
use App\Models\Schoolclass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClasspupilController extends Controller
{

    /**
     * Список учеников класса
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($id)
    {
        //
        $datas=Classpupil::where('schoolclass_id',$id)->get();
        return view('back.pupil.class',['datas'=>$datas]);
    }


    /**
     * Форма добавления нового ученика
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $idSchool=Auth::user()->school->school_id;
        $datas=Schoolclass::where('school_id',$idSchool)->get();
        return view('back.pupil.create',['datas'=>$datas]);
    }


    public function story(Request $request){
        $modelPupil=new Pupil();
        $modelPupil->name=$request->input('name');
        $modelPupil->save();
        $modelClassPupil=new Classpupil();
        $modelClassPupil->pupil_id=$modelPupil->id;
        $modelClassPupil->schoolclass_id=$request->input('school_id');
        $modelClassPupil->save();
        return redirect()->route('class.list');
    }

}
