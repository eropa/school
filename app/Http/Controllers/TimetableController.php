<?php

namespace App\Http\Controllers;

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

}
