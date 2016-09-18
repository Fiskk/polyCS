/*
The template below is what a AngularJS refers to as a 'component.' It is used to create
a custom HTML element(<modal>). Said element is then duplicated via the 'ng-repeat' directive for
each element of the array of objects named 'labs', which is declared and initialized
in this file. During the duplication(basically an implicit foreach), attributes from the objects
in 'labs' are injected into the template as it is being rendered based on the index variable 'h'.
I also changed href attributes to data-target attributes because AngularJS listens for href
broadcasts. I also had to preformat the string variables that I used before I injected them
into the the <pre> element in the DOM because I wasn't immediately sure how to inject HTML via
JavaScript in the current context.
*/

app.directive("modal", function() {
  return {
    template :  '<button type="button" class="btn  btn-lg shadow yellowGradient" data-toggle="modal" data-target="#myModal{{ h.num }}"> ' +
                  '{{ h.location }}' +
                  '</button> ' +

                    '<div class="modal fade text-left" id="myModal{{ h.num }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static"> ' +
                      '<div class="modal-dialog" role="document"> ' +
                        '<div class="modal-content"> ' +
                          '<div class="modal-header blueGradient roundedTopCorners"> ' +
                            '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> ' +
                            '<h4 class="modal-title" id="myModalLabel">{{ h.location }}</h4> ' +
                          '</div> ' +
                          '<div class="modal-body"> ' +
                             '<p>{{ h.details }}</p>' +
                             '<img class="img-responsive img-rounded shadow" src="{{ h.img }}" alt="Picture of {{ h.location }} lab"/>' +
                          '</div> ' +
                          '<div class="container-fluid">' +
                            '<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">' +
                              '<div class="panel panel-default">' +
                                '<div class="panel-heading" role="tab" id="headingOne">' +
                                  '<h4 class="panel-title">' +
                                    '<a role="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse{{ h.num }}" aria-expanded="true" aria-controls="collapseOne">' +
                                      'Accounts' +
                                    '</a>' +
                                  '</h4>' +
                                '</div>' +
                                '<div id="collapse{{ h.num }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">' +
                                  '<div class="panel-body">' +
                                    '<pre>{{ h.accounts }}</pre>' +
                                  '</div>' +
                                '</div>' +
                              '</div>' +
                              '<div class="panel panel-default">' +
                                '<div class="panel-heading" role="tab" id="headingTwo">' +
                                  '<h4 class="panel-title">' +
                                    '<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse{{ h.num + 1 }}" aria-expanded="false" aria-controls="collapseTwo">' +
                                      'Rules' +
                                    '</a>' +
                                  '</h4>' +
                                '</div>' +
                                '<div id="collapse{{ h.num + 1}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">' +
                                  '<div class="panel-body">' +
                                    '<pre>{{ h.rules }}</pre>' +
                                  '</div>' +
                                '</div>' +
                              '</div>' +
                            '</div>' +
                        '</div>' +
                        '<div class="modal-footer blueGradient roundedBottomCorners"> ' +
                          '<button type="button" class="btn yellowGradient" data-dismiss="modal">Close</button> ' +
                        '</div> ' +
                      '</div> ' +
                    '</div> ' +
                  '</div>'
  };
});

app.controller('labsCTRL', function($scope) {

  //this function handles the typing animations
  $(function(){
      $("#typing").typed({
        //strings: ["First sentence.", "Second sentence."],
        //^ Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
        strings: ["Do You Have Your CS Account Yet?", "Labs"],
        typeSpeed: 50,
        startDelay: 1000,
        backSpeed: 30
      });
  });

  // the first two vars were created for efficiency, and the second two for ease of formatiing
  var standardAcct = "TO LOG INTO THE MACHINES IN THIS LAB: \n" +
                     " -Enter your Computer Science Department username and password.\n" +
                     " -Be sure the domain field is set to CS.SUNYIT.EDU.\n\n" +

                      "Computer Science Department accounts are based on your SUNYIT\n" +
                      "account. You will need to know your SUNYIT username and\n" +
                      "password in order to activate your CS account. \n\n" +
                      "Anyone on campus, regardless of major, is welcome to activate \n" +
                      "an account on the CS network and use our resources. If \n" +
                      "you do not yet have an activated CS account, visit our \n" +
                      "accounts page to activate through the web or follow the \n" +
                      "directions on the login screen in the labs.";

  var labRules =  "In order to establish a stable, secure, and productive computing \n"+
                  "environment, a few guidelines need to be established. Using the \n"+
                  "resources of the Computer Science department's computing \n"+
                  "environment constitues acceptance of the following:\n\n"+

                  "-COMPUTING LAB RULES \n"+
                  "All lab rules defined in the Instructional Computing Guide \n"+
                  "published by Computing Services and the Student Handbook shall \n"+
                  "apply to the Computer Science Department's network and labs. \n\n"+
                  "-USER RESPONSIBILITIES \n"+
                  "The owner of every computer account is responsible for any \n"+
                  "activity for which that account is used. Passwords must only be \n"+
                  "known to the owner of the account, and not be distributed to \n"+
                  "others. Passwords should be secure - ie: not dictionary words,\n"+
                  'proper names, or only digits. \n\n'+
                  "-UNATTENDED MACHINES \n"+
                  "Do not leave logged in computer terminals unattended. If you \n"+
                  "must walk away from your terminal, either log out or lock the \n"+
                  "display.\n\n"+
                  "-DISK USAGE \n"+
                  "There is a finite amount of storage space available on the \n"+
                  "Department's main file servers. Two storage areas are available\n"+
                  "for student use: the user's home directory, and a public directory.\n"+
                  "On the windows machines, your home directory is mapped to drive H:,\n"+
                  "and the public directory is mapped to drive T:. On the Unix \n"+
                  "machines, the public directory is mounted as /opt/pub/ on fang \n"+
                  "and the machines in the c012 lab. \n\n"+
                  "Due to the limited amount of space available and current disk \n"+
                  "backup contraints, your home directory is for the storing of \n"+
                  "academic material ONLY. Should you need a temporary storage area\n"+
                  "for other types of files, please feel free to store them in\n"+
                  "the public file system (drive T: on windows, /opt/pub/ on unix).\n"+
                  "This public area is not backed up or actively monitored. Access \n"+
                  "to your files in the public area can be controlled by setting\n"+
                  "proper permissions. More information regarding disk storage\n"+
                  "can be found in the help docs. \n\n"+
                  "-NETWORK MONITORING \n"+
                  "Use of this network is for authorized purposes only. All \n"+
                  "activity and connections are subject to monitoring. \n\n"+
                  "-SOFTWARE INSTALLATIONS \n"+
                  "All software installed on the Department's labs must be \n"+
                  "properly licensed prior to installation. Students are not to \n"+
                  "install any additional software on the machines, regardless of \n"+
                  "its license type. If you would like a particular program installed,\n"+
                  "please let us know. \n\n"
                  "-DISRUPTIVE BEHAVIOR \n"+
                  "In order to maintain a productive work atmosphere, any behavior\n"+
                  "which may disrupt other users is not permitted. ";

  var c012accts = "To log into the machines in this lab enter your Computer Science \n"+
                  "Department username and password. \n\n"+
                  "Computer Science Department accounts are based on your SUNYIT\n"+
                  "account.You will need to know your SUNYIT username and\n"+
                  "password in order to activate your CS account.\n\n"+
                  "Anyone on campus, regardless of major, is welcome to activate their\n"+
                  "account on the CS network and make use of our resources. If\n"+
                  "you do not yet have an activated CS account, visit our accounts\n"+
                  "page to activate through the web or follow the directions on \n"+
                  "the login screen in the labs.";

  var xenAccts = "If you are interested in a virtual machine and have a CS account,\n"+
                 "visit our accounts page and submit a request. \n\n"+
                 "Computer Science Department accounts are based on your SUNYIT \n"+
                 "account. You will need to know your SUNYIT username and password\n"+
                 "in order to activate your CS account. \n\n"+
                 "Anyone on campus, regardless of major, is welcome to activate an\n"+
                 "account on the CS network and make use of our resources. If you\n"+
                 "do not yet have an activated CS account, visit our accounts page\n"+
                 "to activate through the web or follow the directions on the login\n"+
                 "screen in the labs.";

  $scope.labs = [
    {
      location: "C014 Classroom Lab",
      num     : "0",
      img     : "img/labs/c014.png",
      details : "Our primary classroom lab, C014 contains the most up to date equipment. \
                Hardware upgrades are performed every summer and software is updated several \
                times per semester. There are currently 24 PCs running Windows 7, and HP B&W LaserJet printer with \
                duplexer, and an HP Color LaserJet Printer. ISO CD/DVD images of major Operating \
                Systems & MSDN Academic Alliance software are stored locally on the D: drive \
                for faster burning to Disc. ",
                accounts: standardAcct,
                rules   : labRules
    },
    {
      location: "C122 Open Lab",
      num     : "1",
      img     : "img/labs/c122.jpg",
      details : "6 PCs running Windows 7. HP B&W LaserJet printer. Scanner. 2 large whiteboards.",
      accounts: standardAcct,
      rules   : labRules
    },
    {
      location: "B118 24x7 Open Lab",
      num     : "2",
      img     : "img/labs/b118.png",
      details : "10 PCs running Windows 7. HP B&W LaserJet printer. The machines \
                maintained by the Computer Science Dept are on the far right side of the room. ",
      accounts: standardAcct,
      rules   : labRules
    },
    {
      location: "C228 Open Lab",
      num     : "3",
      img     : "img/labs/c228.jpg",
      details : "3 PCs running Windows 7. HP B&W LaserJet printer. \
                This is primarily a lab for the Graduate Students.",
      accounts: standardAcct,
      rules   : labRules
    },
    {
      location: "C012 Gentoo Linux Classroom Lab",
      num     : "4",
      img     : "img/labs/c012.jpg",
      details : "24 PCs running Gentoo Linux. HP B&W LaserJet printer. Scanner. ",

      accounts: c012accts,
      rules   : labRules
    },
    {
      location: "B118 24x7 Open Lab",
      num     : "5",
      img     : "img/labs/b118.png",
      details : "2 PCs running Gentoo Linux. (In addition to 10 Windows 7 PCs)",
      accounts: standardAcct,
      rules   : labRules
    },
    {
      location: "DH1240 Network Security/VOIP Classroom",
      num     : "6",
      img     : "img/labs/c014.png",
      details : "Currently reserved for NCS class' with workspaces for assigned student projects at the networking pods.",
      accounts: standardAcct,
      rules   : labRules
    },
    {
      location: "Xen Virtual Machine Server",
      num     : "7",
      img     : "img/labs/xen.gif",
      details : "The XenServer is capable of running many virtual machines for classes and personal use.",
      accounts: xenAccts,
      rules   : labRules
    }
  ]

});
