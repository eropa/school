<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function group(){
        return $this->belongsTo('App\Models\Grouppage','grouppage_id');
    }
}
