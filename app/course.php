<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $table="courseadd";
    //protected $primary="course_id";

    protected $fillable=[
    'course_title'
    ,'course_code'
    ,'course_credite'
    ];
}
