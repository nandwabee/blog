<?php

namespace Investigatively\Article\Storage\Eloquent\Repository;

trait FindArticle{
  public function find($id){
    $blog = Article::find($id);

    return $blog;
  }
}