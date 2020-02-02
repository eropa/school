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
     * Получаем опции сайта по id школе
     * @param $siteID
     * @return mixed
     */
    function getOptionsIdScool($siteID){
        $datas=\App\Models\Option::where('school_id',$siteID)->get();
        $arraOption[][]=array();
        foreach ($datas as $data){
            $arraOption["option"][$data->name]=$data->value;
        }
        return $arraOption["option"];
    }



