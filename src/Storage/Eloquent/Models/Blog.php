<?php

namespace Nandwabee\Blog\Storage\Eloquent\Models;

use Jenssegers\Mongodb\Model;

class Blog extends Model{
  protected $collection = 'blogs';
}