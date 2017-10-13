
app.controller('listCTRL', function($scope) {

  //this function handles the typing animations
  $(function(){
      $("#typing").typed({
        // strings: ["First sentence.", "Second sentence."],
        //^ Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
        strings: ["Degree Programs"],
        typeSpeed: 50,
        startDelay: 1000,
        backSpeed: 30
      });
  });

  $scope.bsdegrees = [
    {degree: 'Computer & Information Science', url: "https://sunypoly.edu/academics/majors-and-programs/computer-information-science.html"},
    {degree: 'Computer Information Systems', url: "https://sunypoly.edu/academics/majors-and-programs/computer-information-systems.html"},
    {degree: 'Network & Computer Security', url: "https://sunypoly.edu/academics/majors-and-programs/network-computer-security.html"},
    {degree: 'Applied Computing', url: "https://sunypoly.edu/academics/majors-and-programs/applied-computing.html"}
  ];

  $scope.xcel = [
    {combo: 'Computer & Information Science', url: "https://sunypoly.edu/academics/majors-and-programs/bsms-computer-and-information-science.html"},
    //{combo: 'Network and Computer Security', url: ""}
  ];

  $scope.msdegrees = [
    {subject: 'Computer & Information Science', url: "https://sunypoly.edu/academics/majors-and-programs/ms-computer-information-science.html"},
    {subject: 'Network & Computer Security', url: "https://sunypoly.edu/academics/majors-and-programs/ms-network-computer-security.html"},
    //{subject: 'Telecommunications', url: "https://sunypoly.edu/undergraduate/computer-and-information-science/"}
  ];
  //
  // $scope.minors = [
  //   {minor: 'Computer & Information Science', url: "https://sunypoly.edu/undergraduate/computer-and-information-science/minors/computer-and-information-science/"},
  //   {minor: 'Computer Information Systems', url: "https://sunypoly.edu/undergraduate/computer-and-information-science/minors/computer-and-information-systems/"},
  //   {minor: 'Network & Computer Security', url: "https://sunypoly.edu/academics/majors-and-programs/network-and-computer-security/network-computer-security-minor.html"}
  // ]

});
