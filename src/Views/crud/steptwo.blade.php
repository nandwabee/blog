@extends('investigatively::layouts.editor')

@section('article_id')
{{$article->id}}
@stop

@section('content')
  <meta name="article_id" content="">
  <div class="container in-content-wrapper">
    <div class="row">
      <div class="col l6 in-editor-left">
        <div class="row in-editor-title-row">
          <div class="input-field col s12">
              <input id="title" type="text" class="validate" ng-model="article.title">
              <label for="title" class="active">Title</label>
          </div>
        </div>

        <div class="row in-editor-body-row">
          <div class="input-field col s12">
            <textarea id="article-body" class="materialize-textarea" ng-model="article.body"></textarea>
            <label for="article-body" class="active">Body</label>
          </div>
        </div>
      </div>
      <div class="col l6 in-editor-right">
          <div class="row">
            <div class="col s12">
              <ul class="tabs">
                <li class="tab col s3"><a class="active"href="#preview">Preview</a></li>
                <li class="tab col s3"><a href="#photos">Photos</a></li>
                <li class="tab col s3"><a href="#metadata">Metadata</a></li>
              </ul>
            </div>

            <div id="preview" class="col s12">
              <div class="article-title">@{{article.title}}</div>
              <div marked="article.body" class="article-body"></div>
            </div>

            <div id="photos" class="col s12">
              <form action="/photo/upload"
                    class="dropzone"
                    id="editor-dropzone"></form>

              <div class="row article-photo-row">
                <div class="col s12">
                  <ul class="tabs">
                    <li class="tab col s3"><a class="active"href="#uploaded-photos">Uploaded photos</a></li>
                    <li class="tab col s3"><a href="#search-photos">Search</a></li>
                  </ul>
                </div>

                <div id="uploaded-photos" class="col s12">
                  <div class="row">
                    <div class="col l12 s12" ng-repeat="photo in article_photos">
                      <div class="row">
                        <div class="col l6 m6"><img src="@{{photo.url}}" class="responsive-img"></div>
                        <div class="col l6 m6">
                          <div class="row">
                            <div class="col l12 broken-text">
                              <span>URL : @{{base_url}}@{{photo.url}}</span>
                            </div>
                            
                            <div class="input-field col s12">
                              <textarea id="article-body" class="materialize-textarea" ng-model="photo.description" ng-keyup="updatePhotoDescription(photo.description,photo.id)"></textarea>
                              <label for="article-body">Description</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="search-photos" class="col s12">
                  Search Photos
                </div>
              </div>
            </div>

            <div id="metadata" class="col s12">
              <div class="row">
                <div class="col l12">
                  <h5 class="metadata-section-name">Category</h5>
                  <ul class="col l4">
                    <li>Business</li>
                    <li>Sports</li>
                    <li>Election2017</li>
                  </ul>
                  <ul class="col l4">
                    <li>Journalism</li>
                    <li>Politics</li>
                  </ul>
                  <ul class="col l4">
                    <li>Crime</li>
                    <li>Courts</li>
                  </ul>
                </div>

                <div class="col l12">
                  <h5 class="metadata-section-name">Tags</h5>
                  <div class="input-field col s12">
                      <input id="tags" type="text" class="validate" ng-model="article.tags">
                      <label for="tags">A comma separated list of tags</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
@stop