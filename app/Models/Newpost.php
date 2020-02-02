<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newpost extends Model
{
    //
    public function group(){
        return $this->belongsTo('App\Models\Groupnew','groupnew_id');
    }
}
