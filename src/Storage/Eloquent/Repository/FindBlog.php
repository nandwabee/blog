<?php

namespace Nandwabee\Blog\Storage\Eloquent\Repository;

trait FindBlog{
  public function find($id){
    $blog = Blog::find($id);

    return $blog;
  }
}