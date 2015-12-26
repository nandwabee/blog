<?php

namespace Investigatively\Article\Storage\Eloquent\Models;

use Jenssegers\Mongodb\Model;

class Tag extends Model{
  protected $collection = 'article_tags';
}