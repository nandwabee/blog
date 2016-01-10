var editor = angular.module('investigativeditor', [
    'ui.router',
    'hc.marked'
]);

editor.config(function ($stateProvider, $urlRouterProvider,$httpProvider) {
    $httpProvider.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

    //Initialise routes
    $stateProvider
        .state('editor', {
            url: '/',
            templateUrl: '/vendor/investigatively/templates/home.html',
            controller: 'EditorController',
        });
});

editor.run(function ($state, $http, $rootScope) {
    
});

$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});