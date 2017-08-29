var app = angular.module("myApp", ["ngRoute", "ui.bootstrap"]);

// TODO: get the function below out of the root scope by creating a factory
// this function is called when home link in Nav is clicked
app.run(function($rootScope) {

  $rootScope.homeType = function() {
    $(function(location){

      // TODO: figure out how to pass this parameters so we can DRY out my controllers
      $("#typing").typed({
        //strings: ["First sentence.", "Second sentence."],
        //^ Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
        strings: message = ["Welcome"],
        typeSpeed: 100,
        startDelay: 1000,
        backSpeed: 50
      });

    });
  };
}); // TODO: get the function above out of the root scope by creating a factory

// app.factory('typedJS', function() {
//   $("#typing").typed({
//     //strings: ["First sentence.", "Second sentence."]
//     strings: message = ["Welcome"],
//     typeSpeed: 100,
//     startDelay: 1000,
//     backSpeed: 50
//   });
//
// });

// the function below handles the ajax requests that govern(display) different views
// If you want to make a new page, you'll need to add a route (and possibly a controller)
app.config(function($routeProvider) {
    $routeProvider

     // Routing for top-level pages
    .when("/", {
        templateUrl : "partials/home.html"
        // controller  : "homeCTRL" <---that doesn't work
    })
    .when("/classes", {
        templateUrl : "partials/classes.html",
        controller  : "classesCTRL"
    })
    .when("/mailer", {
        templateUrl : "partials/mailer.html",
        controller  : "mailCTRL"
    })
    .when("/accounts", {
        templateUrl : "partials/accounts.html?v=1.2",
        controller  : "accountsCTRL"
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
    .when("/RoundcubeIsDown", {
        templateUrl : "partials/404.html",
        controller  : "facultyCTRL"
    })
    .when("/labs", {
        templateUrl : "partials/labs.html",
        controller  : "labsCTRL"
    }) // End of routing for top-level pages


    // network page is deprecated
    .when("/network", {
        templateUrl : "partials/network.html",
        controller  : "networkCTRL"
    })
    // contact page is deprecated
    .when("/contact", {
        templateUrl : "partials/contact.html",
        controller  : "contactCTRL"
    })

    // Rounting for the Help/Account pages
    .when("/activate", {
        templateUrl : "partials/help/accounts/activate.html",
        controller  : "helpCTRL"
    })
    .when("/password", {
        templateUrl : "partials/help/accounts/password.html",
        controller  : "helpCTRL"
    })
    .when("/resetpw", {
        templateUrl : "partials/help/accounts/resetpw.html",
        controller  : "helpCTRL"
    })
    .when("/msdnaa", {
        templateUrl : "partials/help/accounts/msdnaa.html",
        controller  : "helpCTRL"
    })
    .when("/msdnaa-agree", {
        templateUrl : "partials/help/accounts/msdn-agree.html",
        controller  : "helpCTRL"
    })
    // End of routing for the Help/Accounts pages

    // Routing for Help/Services pages
   .when("/printing", {
       templateUrl : "partials/help/services/printing.html",
       controller  : "helpCTRL"
   })
   .when("/vpn", {
       templateUrl : "partials/help/services/vpn.html",
       controller  : "helpCTRL"
   })
   // NOTE: SSH PuTTY page is at the bottom
   .when("/email", {
       templateUrl : "partials/help/services/email.html?v=1.2",
       controller  : "helpCTRL"
   })
   .when("/mysql", {
       templateUrl : "partials/help/services/mysql.html",
       controller  : "helpCTRL"
   })
   .when("/nfs", {
       templateUrl : "partials/help/services/nfs.html",
       controller  : "helpCTRL"
   })
   .when("/www", {
       templateUrl : "partials/help/services/www.html",
       controller  : "helpCTRL"
   })
   .when("/htaccess", {
       templateUrl : "partials/help/services/htaccess.html",
       controller  : "helpCTRL"
   }) // End of routing for Help/Services pages


    // Routing for Help/Linux pages
    .when("/remotegui", {
        templateUrl : "partials/help/linux/remotegui.html",
        controller  : "helpCTRL"
    })
    // NOTE: SSH PuTTY page is at the bottom
    .when("/gpg", {
        templateUrl : "partials/help/linux/gpg.html",
        controller  : "helpCTRL"
    })
    .when("/scp", {
        templateUrl : "partials/help/linux/scp.html",
        controller  : "helpCTRL"
    }) // End of routing for Help/Linux pages


    // Routing for pages in Help/Windows section
    .when("/winrdp", {
        templateUrl : "partials/help/windows/rdp/winrdp.html",
        controller  : "helpCTRL"
    })
    .when("/osxrdp", {
        templateUrl : "partials/help/windows/rdp/osxrdp.html",
        controller  : "helpCTRL"
    })
    .when("/linuxrdp", {
        templateUrl : "partials/help/windows/rdp/linuxrdp.html",
        controller  : "helpCTRL"
    })
    .when("/winprofile", {
        templateUrl : "partials/help/windows/winprofile.html",
        controller  : "helpCTRL"
    })
    // NOTE: SSH PuTTY page is at the bottom
    .when("/rdp", {
        templateUrl : "partials/help/windows/rdp.html",
        controller  : "helpCTRL"
    })
    .when("/winscp", {
        templateUrl : "partials/help/windows/winscp.html",
        controller  : "helpCTRL"
    })
    .when("/tunneling", {
        templateUrl : "partials/help/windows/tunneling.html",
        controller  : "helpCTRL"
    }) // End of routing for pages in Help/Windows section


    // Routing for pages in Help/Xen section
    .when("/bootdvd", {
        templateUrl : "partials/help/xen/bootdvd.html",
        controller  : "helpCTRL"
    })
    .when("/singleuser", {
        templateUrl : "partials/help/xen/singleuser.html",
        controller  : "helpCTRL"
    })
    .when("/centip", {
        templateUrl : "partials/help/xen/centip.html",
        controller  : "helpCTRL"
    })
    .when("/centrepo", {
        templateUrl : "partials/help/xen/centrepo.html",
        controller  : "helpCTRL"
    }) // End of routing for pages in Help/Xen section


    // NOTE: This route is used by three links
    .when("/putty", {
        templateUrl : "partials/help/putty.html",
        controller  : "helpCTRL"
    });

});
