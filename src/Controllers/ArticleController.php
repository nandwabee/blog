<?php

namespace App\Http\Controllers\Investigatively;

use App\Http\Controllers\Controller;

class ArticleController extends Controller{
  public function __construct(){

  }

  public function create(){
    return view('investigatively::crud.stepone');
  }

  public function update(){
    return view('investigatively::crud.steptwo');
  }

  public function publish(){
    return view('investigatively::crud.stepthree');
  }

  public function article_admin(){
    return view('investigatively::admin.home');
  }
}