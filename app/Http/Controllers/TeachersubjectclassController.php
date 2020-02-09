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

    public function showclass($id)
    {
        $datas=Teachersubjectclass::where('schoolclass_id',$id)->get();
        return view('back.schoolclass.classteacher',['id'=>$id,'datas'=>$datas]);
    }


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

}
