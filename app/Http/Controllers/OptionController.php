<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{

    public function index()
    {
        $option=getOptions();
        return view('back.option.edit',['option'=>$option]);
    }


}
