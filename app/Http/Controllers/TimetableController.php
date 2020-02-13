<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Timetable;
use Illuminate\Http\Request;

class TimetableController extends Controller
{


    public function generate()
    {
        return view('back.timetable.generate');
    }



    public function show()
    {
        return view('back.timetable.show');
    }

    public function showpost(){
        return view('back.timetable.showpost');
    }


    public function teacher()
    {
        return view('back.timetable.teacher');
    }

    /**
     * Список проведенных уроков
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listdata($id){
        $datas=Timetable::where('teachersubjectclass_id',$id)->get();
        return view('back.timetable.listdata',['datas'=>$datas,'id'=>$id]);
    }


    /**
     * Формируем список для успеваемости
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listdatapost(Request $request,$id){
        $data=$request->input('datagenerate');
        $dataRecord=Timetable::where('datelesson',$data)->where('teachersubjectclass_id',$id)->count();
        if($dataRecord==0){
            $model=new Timetable();
            $model->number_poradok=0;
            $model->datelesson=$data;
            $model->teachersubjectclass_id=$id;
            $model->save();
            $idrecord=$model->id;
        }else{
            $dataRecord=Timetable::where('datelesson',$data)->where('teachersubjectclass_id',$id)->first();
            $idrecord=$dataRecord->id;
        }
        $dataDay=Timetable::find($idrecord);
        return view('back.timetable.claddresult',['dataDay'=>$dataDay,'id'=>$id]);
    }

    /**
     * Заполняем результат
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function setResult(Request $request,$id){
        Result::where('timetable_id',$request->input('record'))->delete();
        //dd($request->all());
        $userInput = $request->all();

        foreach( $userInput as $key=>$item){
            $strWithoutChars = preg_replace('/[^0-9]/', '', $key);
            if((int)$strWithoutChars>0){
                if($item!=0){
                    $model=new Result();
                    $model->pupil_id=(int)$strWithoutChars;
                    $model->timetable_id=$request->input('record');
                    $model->result=$item;
                    $model->save();
                }
            }
        }
        return redirect()->route('home.index');
    }


}
