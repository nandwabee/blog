<?php

namespace App\Http\Controllers\Investigatively;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Investigatively\Article\Storage\Eloquent\ArticleRepository;

class ArticleController extends Controller{
  public function __construct(){
    $this->repo = new ArticleRepository();
  }

  public function create(){
    return view('investigatively::crud.stepone');
  }

  public function show($id){
    $data = [
      'article' => $this->repo->find($id)
    ];

    return view('investigatively::crud.show')
      ->with($data);
  }

  public function edit(){
    return view('investigatively::crud.steptwo');
  }

  public function publish(){
    return view('investigatively::crud.stepthree');
  }

  public function article_admin(){
    return view('investigatively::admin.home');
  }

  public function store(Request $request){

    $article = $this->repo->store($request->all());

    return response()->json(['data' => $article]);
  }

  public function update(Request $request,$id){
    $article = $this->repo->update($request,$id);

    return response()->json(['data' => $article]);
  }
}