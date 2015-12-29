var editor = angular.module('investigativeditor', [
    'ui.router',
    'hc.marked'
]);

editor.config(function ($stateProvider, $urlRouterProvider) {
    //Initialise routes
    $stateProvider
        .state('editor', {
            url: '/',
            templateUrl: '/vendor/investigatively/templates/home.html',
            controller: 'EditorController',
        });
});

editor.run(function ($state, $http, $rootScope) {
    //If the route does not contain a hash. We redirect to our default page.
    if (location.hash === "") {
        $state.go('editor');
    }

});

$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});