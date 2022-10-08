<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
    protected $guarded=[];

    public function users(){
        return $this->belongsTo(user::class);
    }
}
