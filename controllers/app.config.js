var app = angular.module("myApp", ["ngRoute"]);

// app.filter('font', function() {
//   return function(val) {
//     if(osName == "windows") {
//       $("a,p,h1,h2,h3,h4,h5,h6,li,pre,button,label").css("font-family", "\'Russo One\', sans-serif");
//     }
//   };
// });

// TODO: get the function below out of the root scope by creating a factory
// this function is called when home link in Nav is clicked
app.run(function($rootScope) {
  $rootScope.homeType = function() {
    $(function(location){

      if(osName == "windows") {
        $("a,p,h1,h2,h3,h4,h5,h6,li,pre,button,label").css("font-family", "\'Russo One\', sans-serif");
      }

      // TODO: figure out how to pass this parameters so we can DRY out my controllers
      $("#typing").typed({
        //strings: ["First sentence.", "Second sentence."],
        //^ Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
        strings: message = ["Welcome", "We're glad you're here."],
        typeSpeed: 100,
        startDelay: 1000,
        backSpeed: 50
      });

    });
  };
}); // TODO: get the function above out of the root scope by creating a factory

// this function handles the ajax requests that govern different views
app.config(function($routeProvider) {
    $routeProvider

    .when("/", {
        templateUrl : "partials/home.html"
        // controller  : "homeCTRL" <---that doesn't work
    })
    .when("/classes", {
        templateUrl : "partials/classes.html",
        controller  : "classesCTRL"
    })
    .when("/help", {
        templateUrl : "partials/help.html",
        controller  : "helpCTRL"
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
        templateUrl : "partials/network.html",
        controller  : "networkCTRL"
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
