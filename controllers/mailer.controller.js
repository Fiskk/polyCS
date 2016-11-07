app.controller('mailCTRL', function ($scope, $http, $timeout) {

  $(function(){
      $("#typing").typed({
        // strings: ["First sentence.", "Second sentence."]
        strings: ["DogNET Help-Desk"],
        typeSpeed: 100,
        startDelay: 1000,
        backSpeed: 50
      });
  });

  $scope.PostformData = {};

  $scope.processForm = function(){
    $http({
      method  : 'POST',
      url     : 'php-bin/NewMail.php?action=postFormData', // postFormData
      data    : $.param($scope.PostformData),  // pass data from view in as strings
      headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
    })

    .success(function(data) {
      if (!data.success) {
        // if not successful, bind errors to error variables
        $scope.error_email          = data.errors.email;
        $scope.error_subject      = data.errors.subject;
        $scope.error_customer_name  = data.errors.customer_name;
        $scope.error_message        = data.errors.message;
      }
      else {
        // Hide errors If exist ???
        $scope.error_email   = "";
        $scope.subject     = "";
        $scope.customer_name = "";
        $scope.message       = "";

        // if successful, bind success message to message and reset the form
        document.getElementById('form').reset();
        $scope.show_success_message = data.message;
        $timeout(function () {
          $scope.show_success_message = false;
        }, 5000);

      }

    });

  }

});
