<?php

namespace App\Http\Controllers\Investigatively;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Investigatively\Article\Storage\Eloquent\ArticleRepository;
use Auth;
use Parsedown;

class ArticleController extends Controller{
  public function __construct(){
    $this->repo = new ArticleRepository();

    $this->parsedown = new Parsedown();
  }

  public function create(){
    return view('investigatively::crud.stepone');
  }

  public function show(Request $request,$id){
    $data = [
        'article' => $this->repo->find($id)
    ];

    if ($request->ajax()) {
      return response()->json($data);
    }

    $data['body'] = $this->parsedown->text($this->repo->find($id)->body);

    return view('investigatively::crud.show')
        ->with($data);
  }

  public function edit($id){
    $data = [
        'article' => $this->repo->find($id)
    ];

    return view('investigatively::crud.steptwo')
        ->with($data);
  }

  public function publish($id){
    $article = $this->repo->find($id);

    if ($article) {
      if($article->status == 0){
        $article->status = 1;
        $article->published_at = new \Mongodate(time());
        $article->published_by = Auth::user()->id;
      }
      else{
        $article->status = 0;
        $article->unpublished_at = new \Mongodate(time());
        $article->unpublished_by = Auth::user()->id;
      }

      $article->save();
    }

    return redirect()->to('/post/' . $id);
  }

  public function article_admin(){
    return view('investigatively::admin.home');
  }

  public function store(Request $request){
    $data = [];

    $data['title'] = $request->input('title');
    $data['body'] = $request->input('body');
    $data['photos'] = $request->input('photos');
    $data['tags'] = explode(',', $request->input('tags'));
    $data['status'] = 0;
    $data['author'] = Auth::user()->id;

    $article = $this->repo->store($data);

    return response()->json(['data' => $article]);
  }

  public function update(Request $request,$id){
    $article = $this->repo->update($request,$id);

    return response()->json(['data' => $article]);
  }
}