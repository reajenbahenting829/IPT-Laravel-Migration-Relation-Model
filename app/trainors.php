<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class trainors extends Model
{
    //use HasFactory;

    //trainor belongsTo user
    public function users()
  {
     return $this->belongsTo('App\Model\users');
  }

  //trainor hasMany courses
  public function courses(){
    return $this->hasMany('App\Models\courses');
}

}