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
        templateUrl : "partials/faculty.html",
        controller  : "facultyCTRL"
    })
    .when("/network", {
        templateUrl : "partials/network.html"
        // controller  : "networkCTRL"
    })
    .when("/labs", {
        templateUrl : "partials/labs.html",
        controller  : "labsCTRL"
    })
    .when("/contact", {
        templateUrl : "partials/contact.html",
        controller  : "contactCTRL"
    });

});
