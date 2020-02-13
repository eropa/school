<?php

namespace App\Http\Controllers;

use App\Models\Classpupil;
use App\Models\Portfolio;
use App\Models\Pupil;
use App\Models\Teachersubjectclass;
use App\Models\Timetable;
use Illuminate\Http\Request;

class PupilController extends Controller
{
    public function parent1(){
        return view('back.pupil.parent1');
    }

    public function parent2($id){
        $classID=Classpupil::where('pupil_id',$id)->first();
        $data=Teachersubjectclass::where('schoolclass_id',$classID->schoolclass_id)->get();
        //return $data;
        return view('back.pupil.parent2',['data'=>$data,'id'=>$id]);
    }

    public function parent3($id,$idrecord){
        $datas=Timetable::where('teachersubjectclass_id',$idrecord)->orderby('datelesson', 'desc')->get();
        return view('back.pupil.parent3',['datas'=>$datas,'id'=>$id,'idrecord'=>$idrecord]);
    }

    public function showpupil($id){
        $pupil=Pupil::find($id);
        $datas=Portfolio::where('pupil_id',$id)->get();
        return view('back.pupil.portfolio',['pupil'=>$pupil,'datas'=>$datas]);
    }

    public function storygramota(Request $request,$id){

        $model=new Portfolio();
        $model->pupil_id=$id;
        $model->name=$request->input('name');
        if ($request->hasFile('fileload')) {

            $imgUrl = $request->file('fileload');
            //dd($imgUrl);

            //$fileName = array_pop(explode(DIRECTORY_SEPARATOR, $imgUrl));
            $fileName = $id."_".rand(1000,9999)."_".rand(11111, 99999) . '.' . $imgUrl->getClientOriginalExtension();
            $image = file_get_contents($imgUrl);
            $destinationPath = base_path() . '/public/images/' . $fileName;
            $model->foto=$fileName;
            file_put_contents($destinationPath, $image);
        }else{
            $model->foto="";
        }
        $model->save();
        return redirect()->back();
    }

    public function deleteport($id){
        Portfolio::destroy($id);
        return redirect()->back();
    }



}
