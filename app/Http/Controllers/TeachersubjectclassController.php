<?php

namespace App\Http\Controllers;

use App\Models\Classpupil;
use App\Models\Schoolclass;
use App\Models\Subject;
use App\Models\Teachersubject;
use App\Models\Teachersubjectclass;
use App\User;
use Illuminate\Http\Request;

class TeachersubjectclassController extends Controller
{

    /**
     * Покозать классы
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showclass($id)
    {
        $class=Schoolclass::find($id);
        $datas=Teachersubjectclass::where('schoolclass_id',$id)->get();
        return view('back.schoolclass.classteacher',['id'=>$id,'class'=>$class,'datas'=>$datas]);
    }


    /**
     * Покозать взаимосвязь
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showclassadd($id)
    {
        $datauser=User::where('role','teacher')->get();
        $datasubject=Subject::all();
        $class=Schoolclass::find($id);
        return view('back.schoolclass.classteacheradd',
                        [   'id'=>$id,
                            'datauser'=>$datauser,
                            'class'=>$class,
                            'datasubject'=>$datasubject]);
    }

    /**
     * Удалить запись
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id){
        Teachersubjectclass::destroy($id);
        return redirect()->back();
    }

    /**
     * Прикрепление учителя и классу и предмета
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function story(Request $request,$id){
        //dd($request);
        $classid=$id;
        $model=new Teachersubjectclass();
        $model->schoolclass_id=$classid;
        $model->subject_id=$request->input('subject_id');
        $model->user_id=$request->input('user_id');
        $model->save();
        return redirect()->route('showclass.list',['id'=>$id]);
    }




}
