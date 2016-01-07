<?php

namespace Investigatively\Article\Storage\Eloquent\Repository;

use Investigatively\Article\Storage\Eloquent\Models\Post;

trait FindArticle{
  /**
    * Find a single article using its id
    *
    * @param $id string The unique string identifying the article.
    */
  public function find($id){
    $article = Post::find($id);

    return $article;
  }
}