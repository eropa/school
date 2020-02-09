<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teachersubjectclass extends Model
{


    public function subject(){
        return $this->belongsTo('App\Models\Subject')->withDefault();
    }

    public function user(){
        return $this->belongsTo('App\User')->withDefault();
    }
}
