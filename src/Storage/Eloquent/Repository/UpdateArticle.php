<?php

namespace Investigatively\Article\Storage\Eloquent\Repository;

use Investigatively\Article\Storage\Eloquent\Models\Post;

trait UpdateArticle{
  public function update(Request $request,$id){
    $post = $this->find($id);

    if($post){
      $post->title = $request->input('title');
      $post->save();
    }

    return $post;
  }
}