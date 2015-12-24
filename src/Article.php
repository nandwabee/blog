<?php 

namespace Investigatively\Article;

class Article{
  function __construct(){
    $this->repo = new ArticleRepository;
  }
  /**
   * Store a new article. At this moment this is tightly coupled to Laravel. 
   */
  public function store($payload){
    return $this->repo->create($payload);
  }

  public function get(){

  }

  public function destroy(){

  }

  public function update(){

  }

  public function edit(){}

  public function create(){}

  public function index(){}
}