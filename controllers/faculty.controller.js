app.controller('facultyCTRL', function($scope) {

  //this function handles the typing animations
  $(function(){
      $("#typing").typed({
        //strings: ["First sentence.", "Second sentence."],
        //^ Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
        strings: ["C.S. Faculty"],
        typeSpeed: 50,
        startDelay: 1000,
        backSpeed: 30
      });
  });

  $scope.binder = function($event) {
    if ($scope.checked == true) {
      $scope.checked = false;
    }
  }

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
      site: "http://web.cs.sunyit.edu/~roger/",
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
      site: "http://www.cs.sunyit.edu/~chiangc/",
      school: "University of Central Florida",
      bio: "Prior to joining SUNY Poly, Dr. Chiang taught \
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
      img: "img/faculty/amos.png",
      phone: "792-7544",
      office: "Kunsela C218",
      email: "amos@sunyit.edu",
      site: "http://www.cs.sunyit.edu/~conferw/",
      school: "Auburn University",
      bio: "Amos Confer's current interests include embedded and mobile systems, \
            architecture and organization, generative design, interactive multimedia \
            and data visualization, and software engineering. Dr. Confer recently \
            returned to academia after a two-year leave during which he was a managing \
            lead for Samsung Mobile's Advanced and Future Projects team and lead of the \
            Mobile Network Operator (MNO) Patent Group reporting directly to the SVP of \
            all North American MNO operations. He consults as a fiber optics test \
            equipment developer, has received a US Patent for a low cost character \
            recognition algorithm designed for resource-limited devices, and \
            has four patents pending based on his work at Samsung Mobile. He has \
            additionally assisted with the translation and technical editing of the \
            English edition of the German generative design text, \"Generative Gestaltun\", \
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
    // {
    //   name: "John Marsh, Associate Professor",
    //   url: "#faculty",
    //   img: "img/faculty/marsh.jpg",
    //   phone: "792-7125",
    //   office: "Kunsela C119",
    //   email: "fjam@sunyit.edu",
    //   site: "http://people.sunyit.edu/~fjam/",
    //   school: "Carnegie Mellon University",
    //   bio: "John Marsh has interests in networking and information theory. "
    // },
    {
      name: "Rosemary Mullick, Professor",
      url: "#faculty",
      img: "img/faculty/rosemary.png",
      phone: "792-7239",
      office: "Kunsela C134",
      email: "rosemary@sunyit.edu",
      site: "",
      school: "Wayne State University",
      bio: "Rosemary Mullick is a specialist in the field of psychology with a broad \
            background of research in the field. Her subsequent graduate degree in \
            computer science led to interests in operating systems and artificial \
            intelligence. Her current research interests include computer networks, \
            parallels between human cognition and artificial intelligence, \
            and human engineering. "
    },
    {
      name: "Jorge Novillo, Professor",
      url: "#faculty",
      img: "img/faculty/jorge.png",
      phone: "792-7352",
      office: "Kunsela C220",
      email: "jorge@sunyit.edu",
      // site: "http://jorge.sunyit.edu/",
      site: "",
      school: "Lehigh University",
      bio: ""
    },
    {
      name: "Michael Reale, Assistant Professor",
      url: "#faculty",
      img: "img/faculty/reale.jpg",
      phone: "792-7227",
      office: "Kunsela C224",
      email: "realemj@cs.sunyit.edu",
      site: "http://www.cs.sunyit.edu/~realemj/",
      school: "State University of New York at Binghamton",
      bio: "Michael J. Reale received the B.S. degree in computer science from the \
            State University of New York College at Oneonta, NY, USA, in 2007, and \
            the M.S. and Ph.D. degrees in computer science from the State University \
            of New York at Binghamton, NY, USA, in 2009 and 2014, respectively. His \
            current research interests include automatic multimodal facial activity \
            analysis, affective state recognition, eye gaze estimation, gesture recognition \
             / animation, multimodal data creation, social signal processing, game \
             design/development, computer vision, computer graphics, human-machine \
             interaction, and GPGPU programming for computer vision. "
    },
    {
      name: "Ronald Sarner, Distinguished Service Professor",
      url: "#faculty",
      img: "img/faculty/ron.png",
      phone: "792-7327",
      office: "Kunsela C123",
      email: "ron@sunyit.edu",
      site: "http://www.cs.sunyit.edu/~ron",
      school: "SUNY-Binghamton",
      bio: "Ron Sarner has research and teaching interests in comparative programming \
            languages, applications of computing in the social sciences, and instructional \
            computing. His degrees are in political science (B.A. SUNY-Stony Brook; M.A., \
            Ph.D. SUNY-Binghamton) and his doctoral dissertation was a quantitative model \
            of the New York State legislative process. He has taught a variety of introductory \
            programming and applications courses as well as courses in decision support and \
            programming languages on the undergraduate level and data analysis on the graduate \
            level. Ron has held a number of administrative positions at SUNY POLY including Director \
            of Information Services, Interim Dean of ISET, and \
            Executive Vice President for Academic Affairs. "
    },
    {
      name: "Saumendra Sengupta, Professor",
      url: "#faculty",
      img: "img/faculty/sam.png",
      phone: "792-7353",
      office: "Kunsela C129",
      email: "sengupta@sunyit.edu",
      site: "http://web.cs.sunyit.edu/~sengupta/",
      school: "University of Waterloo",
      bio: "Sam Sengupta's work spans various topics in applied mathematics and computer \
            science. He taught for six years at the University of Guelph in Canada before joining \
            SUNY POLY in the eighties. His current research interests include modeling of computer \
            systems, computer networks, and distributed and real-time systems. During the last \
            five years, his research endeavors have been confined mostly to the following topics: \
            Intrusion-detection, Generalized Resource Reservation Protocol, Autonomous Systems, \
            Peer-to-peer systems and attendant security issues."
    },
    {
      name: "Scott Spetka, Professor",
      url: "#faculty",
      img: "img/faculty/scott.jpg",
      phone: "792-7537",
      office: "Kunsela C133",
      email: "scott@sunyit.edu",
      site: "http://www.cs.sunyit.edu/~scott/",
      school: "University of California, Los Angeles",
      bio: "Scott Spetka came to the college in 1989 after earning his Ph.D. in computer \
            science. The focus of his research at UCLA was on distributed database systems \
            and distributed operating systems. He also worked at UCLA for one year as a \
            teaching assistant. Scott was technical advisor to the computer center and head \
            of programming and analysis at the National Telecommunications Administration in \
            San Salvador, El Salvador. He was also a professor of mathematics and computer \
            science at the Universidad Centroamericana, José Simeón Cañas during his three \
            years in El Salvador."
    },
    // {
    //   name: "Ali Tekeoglu, NCS Faculty",
    //   url: "#faculty",
    //   img: "img/faculty/tekeoglu.png",
    //   phone: "",
    //   office: "Kunsela C135",
    //   email: "tekeoga@sunyit.edu",
    //   site: "http://web.cs.sunyit.edu/~tekeoga/",
    //   school: "University of Texas at San Antonio ",
    //   bio: "Cyber Vulnerability Analyst & Penetration Tester at Rackspace. Research interests: Secure Multimedia, Internet of Things."
    // },
    {
      name: "Chris Urban, Lecturer, Dept. Chair",
      url: "#faculty",
      img: "img/faculty/chris.png",
      phone: "792-7229",
      office: "Kunsela C120",
      email: "urbanc@sunyit.edu",
      site: "http://www.cs.sunyit.edu/~urbanc/",
      school: "Naval War College",
      bio: "Chris Urban's primary focus is the practical application of computer \
            information systems (CIS) technology to satisfy real-world requirements. \
            He believes that Tom Magliozzi's quote: \"happiness equals reality minus expectations\" \
            is the most useful heuristic for determining quality and stakeholder satisfaction. \
            He holds an M.S. in Information Systems and an M.A. in National Security and \
            Strategic Studies. He is a retired career Naval Officer with significant leadership, \
            management, and project management experience, and he has served as a chief information \
            officer (CIO) and commanding officer. He has taught at the United States Naval Academy, \
            the United States Naval War College, and Villanova University. "
    }
  ];

});
