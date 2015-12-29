editor.controller('EditorController', function ($scope, $http, $state, $stateParams,$location) {
    /**
     * The article_id is used to switch the main interface based on the availability value
     *
     */
     var article_id = $("meta[name=article_id]").attr("content");

     if (article_id) {
        console.log(article_id)
     }

     $scope.article_photos = [];

     $('#editor-dropzone').click(function () {
        $('div.dz-success').remove();
      });

     /**
      * The location
      */
      $scope.base_url = $location.protocol() + '://' + $location.host();

     /**
      * Initialise dropzone
      */
    Dropzone.options.editorDropzone = {
        paramName: "photo",
        uploadMultiple: false,
        acceptedFiles: 'image/*',
        autoProcessQueue: true,
        createImageThumbnails: false,
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        init: function(){
          var editorDropzone = this;

          this.on("success", function(file, response) {
            editorDropzone.removeAllFiles(true);

            $scope.$apply(function(){
              var photos = $scope.article_photos;

              photos.push(response);

              console.log($scope.article_photos);
            });

          });
        },
        success: function(file,response){

        }
    }

    $scope.updatePhotoDescription = function(description,id){
      var data = {
        photo_description: description
      };

      $http.post("/photo/" +id+ "/update", data).success(function(data, status) {
            
      })
    }
});