<?php

namespace App\Http\Controllers;

use App\Models\Classpupil;
use Illuminate\Http\Request;

class ClasspupilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $datas=Classpupil::where('schoolclass_id',$id)->get();
        return view('back.pupil.class',['datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classpupil  $classpupil
     * @return \Illuminate\Http\Response
     */
    public function show(Classpupil $classpupil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classpupil  $classpupil
     * @return \Illuminate\Http\Response
     */
    public function edit(Classpupil $classpupil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classpupil  $classpupil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classpupil $classpupil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classpupil  $classpupil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classpupil $classpupil)
    {
        //
    }
}
