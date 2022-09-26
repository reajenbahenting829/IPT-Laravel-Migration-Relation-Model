<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainees extends Model
{
   // use HasFactory;

    //trainees belongsTo user
    public function users()
    {
        return $this->belongsTo('App\Models\users');
    }

    //trainees belongsTo user
    public function courses()
    {
        return $this->belongsTo('App\Models\courses');
    }
}