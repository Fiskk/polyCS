app.controller('classesCTRL', function($scope) {
  $scope.string1 = "https://banner.sunyit.edu/pls/prod/swssschd.P_ShowSchd?term_in=";
  // TODO: figure out how to get relevant data into vars automagically
  $scope.year = "2016";
  $scope.month = "09";
  $scope.string2 = "&disc_in=CS";

  $scope.inject = function() {
    return $scope.string1.concat($scope.year, $scope.month, $scope.string2);
  };

  // had to separate this from the year var above to keep user from changing
  $scope.currentYear = function() {
    var thisYear = new Date().getFullYear();
      return thisYear;
  };

  $scope.data = {
    model: null,
    years: [
      {id: '2015', name: '2015'},
      {id: '2016', name: '2016'},
      {id: '2017', name: '2017'}
    ],
    semesters: [
      {id: '09', name : 'Fall'},
      {id: '01', name : 'Spring'},
      {id: '06', name : 'Summer'}
    ]
   };

});
