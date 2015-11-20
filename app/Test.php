<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table="insert";
    protected $fillable[
    'name'
    ,'address'
    ,'phone'
    ];

}
