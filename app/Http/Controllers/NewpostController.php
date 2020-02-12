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
     * Список новостей
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index1()
    {
        $school_id=getSiteSchoolID();
        $groupnew=Groupnew::where('school_id',$school_id)->get();
        foreach ($groupnew as $item){
            $groupid[]=$item->id;
        }
        $news=Newpost::wherein('groupnew_id',$groupid)->orderBy('id', 'desc')->get();
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

    /**
     * Форма редактирования
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $data=Newpost::find($id);
        $school_id=getSiteSchoolID();
        $groupnew=Groupnew::where('school_id',$school_id)->get();
        return view('back.newpost.edit',['data'=>$data,'groupnew'=>$groupnew]);
    }


    /**
     * Добавление новой записи
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function story(Request $request){
        $model=new Newpost();
        $model->groupnew_id=$request->input('groupnew_id');
        $model->name=$request->input('name');
        $model->slug=$request->input('name');
        $model->textsmallhtml=$request->input('editor1');
        $model->textsfullhtml=$request->input('editor2');
        $model->foto="";
        $model->save();
        return redirect()->route('newpos.list')->with('status', 'Запись создана');
    }

    /**
     * Удаление записи
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id){
        Newpost::destroy($id);
        return redirect()->route('newpos.list')->with('status', 'Запись удалена');
    }


    public function update(Request $request,$id){
        $model=Newpost::find($id);
        $model->groupnew_id=$request->input('groupnew_id');
        $model->name=$request->input('name');
        $model->slug=$request->input('name');
        $model->textsmallhtml=$request->input('editor1');
        $model->textsfullhtml=$request->input('editor2');
        $model->foto="";
        $model->save();
        return redirect()->route('newpos.list')->with('status', 'Запись обновлена');
    }

}
