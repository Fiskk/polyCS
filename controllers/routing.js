var app = angular.module("myApp", ["ngRoute"]);

app.config(function($routeProvider) {
    $routeProvider

    .when("/", {
        templateUrl : "partials/home.html"
    })
    .when("/degrees", {
        templateUrl : "partials/degrees.html",
        controller  : "listCTRL"
    })
    .when("/faculty", {
        templateUrl : "partials/home.html"
    })
    .when("/network", {
        templateUrl : "partials/home.html"
    })
    .when("/labs", {
        templateUrl : "partials/home.html"
    })
    .when("/contact", {
        templateUrl : "partials/home.html"
    });
});
