<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classpupil extends Model
{
    //
    public function pupil()
    {
        return $this->belongsTo('App\Models\Pupil')->withDefault();
    }
}
