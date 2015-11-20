<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
   protected $table="cvinfo";
    //protected $primary="course_id";

    protected $fillable=[
    'file'
    ,'caption'
    ,'description'
    ];
}
