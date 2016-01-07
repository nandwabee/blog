<?php

namespace Investigatively\Article\Storage\Eloquent\Repository;

use Investigatively\Article\Storage\Eloquent\Models\Post;

trait CreateArticle{
  public function store($payload){
    return Post::create($payload);
  }
}