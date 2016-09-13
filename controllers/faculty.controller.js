// angular.module("myApp").component('list', {
//   template:
//   '<ul>'+
//     '<li ng-repeat="x in facultyMembers">'+
//       '<a href="{{ x.url }}">{{ x.name }}</a>'+
//       '<input type="checkbox" ng-model="checked" aria-label="Toggle ngHide">'+
//       '<div>'+
//         '<div class="check-element animate-show" ng-show="checked">'+
//           '<p>I show up when your checkbox is checked.</p>'+
//         '</div>'+
//       '</div>'+
//     '</li>'+
//   '</ul>',
// }),
app.controller('facultyCTRL', function($scope) {
  $scope.facultyMembers = [
    {
      name: "Bruno Andriamanalimanana, Associate Professor",
      url: "#faculty",
      phone: "792-7232",
      office: "Kunsela C126",
      email: "fbra@sunyit.edu",
      site: "",
      school: "Lehigh University",
      bio: "Bruno Andriamanalimanana is a specialist in combinatorics. He has a \
            special research interest in coding theory and cryptography and has \
            taught at several universities in this country as well as the \
            University of Madagascar. "
    },
    {
      name: "Roger Cavallo, Professor",
      url: "#faculty",
      phone: "792-7231",
      office: "Kunsela C125",
      email: "roger@sunyit.edu",
      site: "",
      school: "State University of New York at Binghamton",
      bio: "Roger Cavallo is an expert in systems theory with an extensive record \
            of research and publications. He has produced a number of books along \
            with several dozen articles and professional papers. He has also held \
            various distinguished research grants, visiting appointments both in \
            this country and abroad, and is a Faculty Exchange Scholar of the State \
            University of New York. He has been elected by his colleagues as  \
            department chair. His general areas of research are in systems methodology, \
            conceptual modeling, and probabilistic database theory. "
    },
    {
      name: "Chen-Fu Chiang, Assistant Professor",
      url: "#faculty",
      phone: "792-7379",
      office: "Kunsela C225",
      email: "chiangc@sunyit.edu",
      site: "Web: http://www.cs.sunyit.edu/~chiangc/",
      school: "",
      bio: ""
    },
    {
      name: "Amos Confer, Assistant Professor",
      url: "#faculty",
      phone: "792-7544",
      office: "Kunsela C218",
      email: "amos@sunyit.edu",
      site: "Web: http://www.cs.sunyit.edu/~conferw/",
      school: "",
      bio: ""
    },
    {
      name: "John Marsh, Associate Professor",
      url: "#faculty",
      phone: "792-7125",
      office: "Kunsela C225",
      email: "fjam@sunyit.edu",
      site: "Web: http://people.sunyit.edu/~fjam/",
      school: "",
      bio: ""
    },
    {
      name: "Rosemary Mullick, Professor",
      url: "#faculty",
      phone: "792-7239",
      office: "Kunsela C134",
      email: "rosemary@sunyit.edu",
      site: "",
      school: "",
      bio: ""
    },
    {
      name: "Jorge Novillo, Professor",
      url: "#faculty",
      phone: "792-",
      office: "Kunsela",
      email: "@sunyit.edu",
      site: "",
      school: "",
      bio: ""
    },
    {
      name: "Michael Reale, Assistant Professor",
      url: "#faculty",
      phone: "792-",
      office: "Kunsela",
      email: "@sunyit.edu",
      site: "",
      school: "",
      bio: ""
    },
    {
      name: "Ronald Sarner, Distinguished Service Professor",
      url: "#faculty",
      phone: "792-",
      office: "Kunsela",
      email: "@sunyit.edu",
      site: "",
      school: "",
      bio: ""
    },
    {
      name: "Saumendra Sengupta, Professor",
      url: "#faculty",
      phone: "792-",
      office: "Kunsela",
      email: "@sunyit.edu",
      site: "",
      school: "",
      bio: ""
    },
    {
      name: "Scott Spetka, Professor",
      url: "#faculty",
      phone: "792-",
      office: "Kunsela",
      email: "@sunyit.edu",
      site: "",
      school: "",
      bio: ""
    },
    {
      name: "Chris Urban, Lecturer, Dept. Chair",
      url: "#faculty",
      phone: "792-",
      office: "Kunsela",
      email: "@sunyit.edu",
      site: "",
      school: "",
      bio: ""
    },
    {
      name: "Roopa Vishwanathan, Assistant Professor",
      url: "#faculty",
      phone: "792-",
      office: "Kunsela",
      email: "@sunyit.edu",
      site: "",
      school: "",
      bio: ""
    }
    ];
  // $scope.$onLoad('$viewContentLoaded', function() {
  //     can I use this to trigger typed.js?
  // });
});
