<?php

namespace App\Http\Controllers;

use App\Models\Pagecontact;
use Illuminate\Http\Request;

class PagecontactController extends Controller
{

    /**
     * Открываем форма на редактирование
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        $schoolId=getSiteSchoolID();
        $data=Pagecontact::where('school_id',$schoolId)->first();
        return view('back.pagecontact.edit',['data'=>$data]);
    }

    /**
     *
     * @param Request $request
     */
    public function update(Request $request){
        $schoolId=getSiteSchoolID();
        Pagecontact::where('school_id',$schoolId)->delete();
        $model=new Pagecontact();
        $model->texthtml=$request->input('editor1');
        $model->school_id=$schoolId;
        $model->save();
        return redirect()->back();
    }

}
