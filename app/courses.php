<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    //use HasFactory;

  //courses  hasMany trainees
    public function trainees(){
        return $this->hasMany('App\Models\trainees');
    }
//courses belongsTo trainor
    public function trainors(){
        return $this->belongsTo('App\Models\trainors');
    }
}