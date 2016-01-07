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
    $photo->photo = $request->file('photo');
    $photo->save();

    return response()->json(['url' => $photo->photo->url(),'id'=>$photo->id]);
  }

  public function update(Request $request,$id){
    $photo = Photo::find($id);

    if($photo){
      $photo->description = $request->input('photo_description');
      $photo->save();
    }
  }
}