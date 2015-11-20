<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class basicCntroller extends Controller
{
    public function index(){
       return view('influx.index');
    } 
     public function about(){
       return view('influx.about-us');
    }
    public function service(){

      return view('influx.service');
    }
    public function contact(){
      return view('influx.contact');
    }
}
