<?php

namespace Investigatively\Article\Storage\Eloquent\Repository;

use Investigatively\Article\Storage\Eloquent\Models\Article;

trait CreateArticle{
  public function create($payload){
    $article = Article::create($payload);

    return $article;
  }
}