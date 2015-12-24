<?php

namespace Investigatively\Article\Storage\Eloquent\Repository;

trait FindArticle{
  /**
    * Find a single article using its id
    *
    * @param $id string The unique string identifying the article.
    */
  public function find($id){
    $article = Article::find($id);

    return $article;
  }
}