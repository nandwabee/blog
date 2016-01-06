<?php 

namespace Investigatively\Article\Storage\Eloquent;

use Investigatively\Article\Storage\Eloquent\Repository\CreateArticle;
use Investigatively\Article\Storage\Eloquent\Repository\FindArticle;
use Investigatively\Article\Storage\Eloquent\Repository\UpdateArticle;

class ArticleRepository{
  use CreateArticle,FindArticle,UpdateArticle;
}