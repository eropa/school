<?php

namespace App\Http\Controllers;

use App\Models\Pupil;
use Illuminate\Http\Request;

class PupilController extends Controller
{
    public function parent1(){
        return view('back.pupil.parent1');
    }

    public function parent2(){
        return view('back.pupil.parent2');
    }
}
