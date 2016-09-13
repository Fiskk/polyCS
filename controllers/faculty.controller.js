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
      img: "img/faculty/bruno.png",
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
      img: "img/faculty/roger.png",
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
      img: "img/faculty/chiangc.jpg",
      phone: "792-7379",
      office: "Kunsela C225",
      email: "chiangc@sunyit.edu",
      site: "Web: http://www.cs.sunyit.edu/~chiangc/",
      school: "University of Central Florida",
      bio: "Dr. Chen-Fu Chiang (first name:振富last name:江) will join the department \
            of Computer and Information Science at the State University of New York \
            Polytechnic Institute in Fall 2015. Prior to joining SUNY Poly, he taught \
            at the University of Central Missouri. He received his first bachelor's \
            degree from National Taiwan University. He further obtained his Master’s \
            degree in science and engineering from the University of Pennsylvania and \
            Ph.D. in computer science from the University of Central Florida. After \
            obtaining his Ph.D., Dr. Chiang spent two years in Quebec working as a \
            postdoctoral researcher at Université de Sherbrooke. His teaching interests \
            include algorithms, matrix linear algebra, database systems and motivating \
            students to be more self-driven. His primary research interests are in the \
            field of theoretical computation, algorithm design and analysis, especially \
            in quantum computation and quantum algorithms. He has been working on \
            understanding and demonstrating how quantum phenomena can be harnessed \
            in order to dramatically advance the fundamental capabilities of \
            information processing. "
    },
    {
      name: "Amos Confer, Assistant Professor",
      url: "#faculty",
      img: "img/faculty/bruno.png",
      phone: "792-7544",
      office: "Kunsela C218",
      email: "amos@sunyit.edu",
      site: "Web: http://www.cs.sunyit.edu/~conferw/",
      school: "",
      bio: "Amos Confer's current interests include embedded and mobile systems, \
            architecture and organization, generative design, interactive multimedia \
            and data visualization, and software engineering. Dr. Confer recently \
            returned to academia after a two-year leave during which he was a managing \
            lead for Samsung Mobile's Advanced and Future Projects team and lead of the \
            Mobile Network Operator (MNO) Patent Group reporting directly to the SVP of \
            all North American MNO operations. He consults as a fiber optics test \
            equipment developer, has received a US Patent for a low cost character \
            recognition algorithm designed for the most resource limited devices, and \
            has four patents pending based on his work at Samsung Mobile. He has \
            additionally assisted with the translation and technical editing of the \
            English edition of the German generative design text, Generative Gestaltung, \
            distributed in the US by Princeton Architectural Press. \
            In the classroom, Dr. Confer emphasizes a comprehensive understanding of \
            computer/software systems so that students not only understand the high-level \
            aspects of their applications, but also realize the consequences of what they \
            are telling the physical device to do. He often uses embedded targets (or \
            classic personal computers such as the Commodore 64) in classroom examples \
            because the machines are simple enough to be wholly understood by students. \
            He additionally encourages students to think about the potential existence of \
            computing in the natural world and developed a working pop-up book computer \
            made entirely out of cardboard. \
            Dr. Confer is a former chair of the Academic Affairs Committee and member of the \
            Executive Committee of the Faculty Assembly, and a member of the Graduate Council."
    },
    {
      name: "John Marsh, Associate Professor",
      url: "#faculty",
      img: "img/faculty/roger.png",
      phone: "792-7125",
      office: "Kunsela C225",
      email: "fjam@sunyit.edu",
      site: "Web: http://people.sunyit.edu/~fjam/",
      school: "Auburn University",
      bio: ""
    },
    {
      name: "Rosemary Mullick, Professor",
      url: "#faculty",
      img: "img/faculty/bruno.png",
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
      img: "img/faculty/bruno.png",
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
      img: "img/faculty/bruno.png",
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
      img: "img/faculty/bruno.png",
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
      img: "img/faculty/bruno.png",
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
      img: "img/faculty/bruno.png",
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
      img: "img/faculty/bruno.png",
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
      img: "img/faculty/bruno.png",
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
