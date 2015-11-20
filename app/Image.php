<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table="images";
    //protected $primary="course_id";

    protected $fillable=[
    'file'
    ,'caption'
    ,'description'
    ];
}
