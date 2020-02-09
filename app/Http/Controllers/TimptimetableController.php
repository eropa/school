<?php

namespace App\Http\Controllers;

use App\Models\Timptimetable;
use Illuminate\Http\Request;

class TimptimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nameday=array(
                'понедельник',
                'вторник',
                'среда',
                'четверг',
                'пятница',
                'суббота');
        return view('back.schoolclass.temptimetable',
            ['nameday'=>$nameday]);
    }

    public function edit($id,$n){
        $nameday=array(
            'понедельник',
            'вторник',
            'среда',
            'четверг',
            'пятница',
            'суббота');
        return view('back.schoolclass.temptimetableedit',
            ['nameday'=>$nameday]);
    }



}
