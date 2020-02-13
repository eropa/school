<?php

namespace App\Http\Controllers;

use App\Models\Grouppage;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{

    /**
     * Главная страница
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function main(){
        return view('index');
    }


    /**
     * Список новостей
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $school_id=getSiteSchoolID();
        $groupnew=Grouppage::where('school_id',$school_id)->get();
        foreach ($groupnew as $item){
            $groupid[]=$item->id;
        }
        $datas=Page::wherein('grouppage_id',$groupid)->orderBy('id', 'desc')->get();
        $school_id=getSiteSchoolID();
        $grouppage=Grouppage::where('school_id',$school_id)->get();
        return view('back.page.index',['datas'=>$datas,'grouppage'=>$grouppage]);
    }

    /**
     * Создать
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){
        $school_id=getSiteSchoolID();
        $grouppage=Grouppage::where('school_id',$school_id)->get();
        return view('back.page.create',['grouppage'=>$grouppage]);
    }

    /**
     * Редактировать
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $data=Page::find($id);
        $school_id=getSiteSchoolID();
        $grouppage=Grouppage::where('school_id',$school_id)->get();
        return view('back.page.edit',['data'=>$data,'grouppage'=>$grouppage]);
    }

    /**
     * Создание записи
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function story(Request $request){
        $model=new Page();
        $model->name=$request->input('name');
        $model->slug=$request->input('name');
        $model->texthtml=$request->input('editor1');
        $model->grouppage_id=$request->input('grouppage_id');
        $model->save();
        return redirect()->route('page.list')->with('status', 'Запись создана');
    }

    /**
     * Удаление записи
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id){
        Page::destroy($id);
        return redirect()->route('page.list')->with('status', 'Запись удалена');
    }

    public function update(Request $request,$id){
        $model=Page::find($id);
        $model->name=$request->input('name');
        $model->slug=$request->input('name');
        $model->texthtml=$request->input('editor1');
        $model->grouppage_id=$request->input('grouppage_id');
        $model->save();
        return redirect()->route('page.list')->with('status', 'Запись обнавлена');
    }

}
