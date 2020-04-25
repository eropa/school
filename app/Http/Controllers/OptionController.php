<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{

    /**
     * Показываем все опции сайта
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $option=getOptions();
        if(!isset($option['phone'])){
            setOption("phone","");
            setOption("email","");
            setOption("title","");
            setOption("slaid1","");
            setOption("slaid2","");
            setOption("slaid3","");
            $option=getOptions();

        }


        return view('back.option.edit',['option'=>$option]);
    }


    /**
     * Обновялем параметры сайта
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request){
        $schoolId=getSiteSchoolID();
       // dd($request);
        Option::where('school_id',$schoolId)->delete();

        setOption("phone",$request->input('phone'));
        setOption("email",$request->input('email'));
        setOption("title",$request->input('title'));
        setOption("slaid1",$request->input('slaid1'));
        setOption("slaid2",$request->input('slaid2'));
        setOption("slaid3",$request->input('slaid3'));

        if ($request->hasFile('logo')) {

            $imgUrl = $request->file('logo');
            //dd($imgUrl);
            //$fileName = array_pop(explode(DIRECTORY_SEPARATOR, $imgUrl));
            $fileName = rand(11111, 99999) . '.' . $imgUrl->getClientOriginalExtension();
            $image = file_get_contents($imgUrl);

            $destinationPath = base_path() . '/public/images/' . $fileName;

            file_put_contents($destinationPath, $image);
            //$attributes['image'] = $fileName;
            setOption("logo",$fileName);
        }
        return redirect()->back()->with('status', 'Обновили параметры');
    }






}
