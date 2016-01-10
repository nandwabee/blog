<?php

namespace Investigatively\Article\Storage\Eloquent\Repository;

use Investigatively\Article\Storage\Eloquent\Models\Post;
use Illuminate\Http\Request;

trait UpdateArticle{
  public function update(Request $request,$id){
    $post = $this->find($id);

    if($post){
      $post->title = $request->input('title');
      $post->body = $request->input('body');
      $post->photos = $request->input('photos');
      $post->tags = (is_array($request->input('tags'))) ? $request->input('tags') : explode(',', $request->input('tags'));
      $post->save();
    }

    return $post;
  }
}