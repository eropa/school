<?php

    /**
     * По номеру пользователя получаем сайт
     * @return mixed
     */
    function getSite(){
        $siteID=\Illuminate\Support\Facades\Auth::user()->school->school_id;
        $url=\App\Models\School::find($siteID)->url;
        return $url;
    }

    /**
     * @return получаем школу ID
     */
    function getSiteSchoolID(){
        $siteID=\Illuminate\Support\Facades\Auth::user()->school->school_id;
        return $siteID;
    }

    /**
     * ПОлучаем опции сайт по пользователю
     * @return mixed
     */
    function getOptions(){
        $siteID=\Illuminate\Support\Facades\Auth::user()->school->school_id;
        $datas=\App\Models\Option::where('school_id',$siteID)->get();
        $arraOption[][]=array();
        foreach ($datas as $data){
            $arraOption["option"][$data->name]=$data->value;
        }
       return $arraOption["option"];
    }

    /**
     * Обновляем параметры сайта
     * @param $name
     * @param $value
     */
    function setOption($name,$value){
        $siteID=\Illuminate\Support\Facades\Auth::user()->school->school_id;
        $model=new \App\Models\Option();
        $model->name=$name;
        $model->value=$value;
        $model->school_id=$siteID;
        $model->save();
    }

    /**
     * Получаем опции сайта по id школе
     * @param $siteID
     * @return mixed
     */
    function getOptionsIdScool($siteID){
        $datas=\App\Models\Option::where('school_id',$siteID)->get();
        if(is_null($datas))
            return null;
        $arraOption[][]=array();
        foreach ($datas as $data){
            $arraOption["option"][$data->name]=$data->value;
        }
        return $arraOption["option"];
    }

    /**
     * Количество школ
     * @return int
     */
    function getCountSchool(){
        return \App\Models\School::all()->count();
    }

    /**
     * Получаем кол-во пользователей
     * @return int
     */
    function getCountUser(){
        return \App\User::all()->count();
    }

    /**
     * Кол-во пользователей определеной роли
     * @param $role
     * @return mixed
     */
    function getCountRole($role){
        return \App\User::Where('role',$role)->count();
    }

    /**
     * Кол-во учеников БД
     * @return int
     */
    function getCountPupil(){
        return \App\Models\Pupil::all()->count();
    }

    /**
     * Кол-во групп новостей
     * @param $idsait
     * @return mixed
     */
    function getCountGroupNewSait(){
        $userid=\Illuminate\Support\Facades\Auth::user()->id;
        $data=\App\Models\UserSchool::where('user_id',$userid)->first();
        $idsait=$data->school_id;
        return \App\Models\Groupnew::Where('school_id',$idsait)->count();
    }

    /**
     * Количество новостей
     * @return int
     */
    function getCountNewSait(){
        $userid=\Illuminate\Support\Facades\Auth::user()->id;
        $data=\App\Models\UserSchool::where('user_id',$userid)->first();
        $idsait=$data->school_id;
        $datas= \App\Models\Groupnew::Where('school_id',$idsait)->get();
        $i=0;
        foreach ($datas as $data){
            $i+=\App\Models\Newpost::where('groupnew_id',$data->id)->count();
        }
        return $i;
    }

    /**
     * Кол-во групп
     * @return mixed
     */
    function getCountGroupPageSait(){
        $userid=\Illuminate\Support\Facades\Auth::user()->id;
        $data=\App\Models\UserSchool::where('user_id',$userid)->first();
        $idsait=$data->school_id;
        return \App\Models\Grouppage::Where('school_id',$idsait)->count();
    }


    function getCountPageSait(){
        $userid=\Illuminate\Support\Facades\Auth::user()->id;
        $data=\App\Models\UserSchool::where('user_id',$userid)->first();
        $idsait=$data->school_id;
        $datas= \App\Models\Grouppage::Where('school_id',$idsait)->get();
        $i=0;
        foreach ($datas as $data){
            $i+=\App\Models\Page::where('grouppage_id',$data->id)->count();
        }
        return $i;
    }




