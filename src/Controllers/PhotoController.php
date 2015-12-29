<?php

namespace App\Http\Controllers\Investigatively;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Investigatively\Article\Storage\Eloquent\Models\Photo;

class PhotoController extends Controller{
  public function __construct(){

  }

  public function upload(Request $request){
    $photo = new Photo;
    $photo->photo = $request->file('files');
    $photo->save();

    return 'success';
  }
}