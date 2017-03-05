app.controller('classesCTRL', function($scope) {

  $(function(){
      $("#typing").typed({
        // strings: ["First sentence.", "Second sentence."],
        // ^ Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
        strings: ["Class Listings"],
        typeSpeed: 100,
        startDelay: 1000,
        backSpeed: 50
      });
  });

  $scope.termTrue = function() {
    return $scope.term = true;
  }

  $scope.currentYear = new Date().getFullYear();

  $scope.data = {
    model: null,
    years: [
      {value: '', name: 'Select Year'},
      {value: $scope.currentYear - 1, name: $scope.currentYear - 1},
      {value: $scope.currentYear, name: $scope.currentYear},
      {value: $scope.currentYear + 1, name: $scope.currentYear + 1}
    ],
    semesters: [
      {value: '', name: 'Select Semester'},
      {id: '09', name : 'Fall'},
      {id: '01', name : 'Spring'},
      {id: '06', name : 'Summer'}
    ]
   };

});
