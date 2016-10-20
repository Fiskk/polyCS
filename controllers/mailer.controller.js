app.controller('mailCTRL', function($scope) {

  $(function(){
      $("#typing").typed({
        // strings: ["First sentence.", "Second sentence."],
        // ^ Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
        strings: ["DogNET Help-Desk"],
        typeSpeed: 100,
        startDelay: 1000,
        backSpeed: 50
      });
  });

  $scope.PostformData = {};
  $scope.processForm = function() {
    $http({
      method  : 'POST',
      url     : 'php-bin/form-mail.php?recip=bakerdp',
      // url  : 'formProcess.php?action=postFormData',

      // pass in data as strings
      data    : $.param($scope.PostformData), 
      // set the headers so angular passing info as form data (not request payload)
      headers : {'Content-Type': 'application/x-www-form-urlencoded' } 
    })

    .success(function(data) {
      if(!data.success) {
        // should I perform server-side validation?
      }
      else {
        $scope.error_first_name  = "";
        $scope.error_last_name   = "";
        $scope.error_email       = "";
        $scope.phone_num         = "";
        $scope.customer_name     = "";
        // if successful, bind success message to message
        $scope.show_success_message = data.message;

        $timeout(function () { 
          $scope.show_success_message = false; 
        }, 5000);
      }
    });
  }
  
});
