<?php
Route::group(['namespace' => 'App\Http\Controllers\Investigatively'], function(){
  Route::get('articles/new',[
    'uses' => 'ArticleController@create'
  ]);

  Route::get('article/{id}/review',[
    'uses' => 'ArticleController@review'
  ]);

  Route::post('articles/new',[
    'uses' => 'ArticleController@store'
  ]);

  Route::post('article/{id}/review',[
    'uses' => 'ArticleController@update'
  ]);

  Route::post('article/{id}/publish',[
    'uses' => 'ArticleController@publish'
  ]);

  Route::get('article/{id}/review',[
    'uses' => 'ArticleAdminController@home'
  ]);
});
