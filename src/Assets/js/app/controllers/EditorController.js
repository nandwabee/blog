editor.controller('EditorController', function ($scope, $http, $state, $stateParams) {
    /**
     * The article_id is used to switch the main interface based on the availability value
     *
     */
     var article_id = $("meta[name=article_id]").attr("content");

     if (article_id) {
        console.log(article_id)
     }
});