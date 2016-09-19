// Use this to calc the month of the next semester and generate links to Banner app
// function calcNext() {
//   var currentMonth = new Date().getMonth();
//   if (currentMonth > 9) {
//     return '01';
//   }
//   else if (currentMonth > 1 && currentMonth <= 6) {
//     return '06';
//   }
//   else {
//     return '01';
//   }
// }

app.controller('classesCTRL', function($scope) {

  if(osName == "windows") {
    $("a,p,h1,h2,h3,h4,h5,h6,li,pre,button,label").css("font-family", "\'Russo One\', sans-serif");
  }

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

  $scope.currentYear = function() {
    var thisYear = new Date().getFullYear();
      return thisYear;
  };

  $scope.data = {
    model: null,
    years: [
      {value: '', name: 'Select Year'},
      {value: '2015', name: '2015'},
      {value: '2016', name: '2016'},
      {value: '2017', name: '2017'}
    ],
    semesters: [
      {value: '', name: 'Select Semester'},
      {id: '09', name : 'Fall'},
      {id: '01', name : 'Spring'},
      {id: '06', name : 'Summer'}
    ]
   };

//   $scope.string1 = "https://banner.sunyit.edu/pls/prod/swssschd.P_ShowSchd?term_in=";
//   $scope.year = "2016";
//   $scope.month = calcNext();
//   $scope.string2 = "&disc_in=CS";
//
//   $scope.inject = function() {
//     return $scope.string1.concat($scope.year, $scope.month, $scope.string2);
//   };

});
