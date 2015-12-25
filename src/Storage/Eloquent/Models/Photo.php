<?php

namespace Investigatively\Article\Storage\Eloquent\Models;

use Jenssegers\Mongodb\Model;

class Photo extends Model{
  protected $collection = 'article_photos';
}