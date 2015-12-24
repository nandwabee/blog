<?php

namespace Investigatively\Article\Storage\Eloquent\Models;

use Jenssegers\Mongodb\Model;

class Post extends Model{
  protected $collection = 'articles';
}