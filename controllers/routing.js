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
        templateUrl : "partials/faculty.html"
    })
    .when("/network", {
        templateUrl : "partials/network.html"
    })
    .when("/labs", {
        templateUrl : "partials/labs.html"
    })
    .when("/contact", {
        templateUrl : "partials/contact.html",
        controller  : "contactCTRL"
    });
    
});
