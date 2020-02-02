<?php

namespace App\Http\Controllers;

use App\Models\Pagecontact;
use Illuminate\Http\Request;

class PagecontactController extends Controller
{

    public function edit()
    {
        return view('back.pagecontact.edit');
    }


}
