<?php

namespace Nandwabee\Blog\Storage\Eloquent\Repository;

use Nandwabee\Blog\Storage\Eloquent\Models\Blog;

trait CreateBlog{
  public function create($payload){
    $blog = Blog::create($payload);

    return $blog;
  }
}