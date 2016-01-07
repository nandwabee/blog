<?php

namespace Investigatively\Article\Storage\Eloquent\Models;

use Jenssegers\Mongodb\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Photo extends Model implements StaplerableInterface{
  use EloquentTrait;

  protected $collection = 'article_photos';

  protected $fillable = ['photo', 'description'];

  /**
   *@todo The configuration options need to live in the config file.
   */
  public function __construct(array $attributes = array()) {
      $this->hasAttachedFile('photo', [
          'styles' => [
              'smartphone' => '320x175',
              'tablet_portrait' => '600x365',
              'tablet_landscape' => '768x445',
              'desktop' => '1024x480'
          ]
      ]);

      parent::__construct($attributes);
  }
}