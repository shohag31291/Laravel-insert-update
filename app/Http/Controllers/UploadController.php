<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use \Input as Input;

class UploadController extends Controller
{
    public function upload(){
  
  if(Input::hasFile('file')) {

      echo 'Uploaded<br/>';
      $file = Input::file('file');
      $file->move('uploads', $file->getClientOriginalName());
      echo '<img src="uploads/'.$file->getClientOriginalName().'"./>';
    }
    } 
}
