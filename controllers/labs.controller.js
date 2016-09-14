app.directive("modal", function() {
  return {
    template :  '<button type="button" class="btn btn-primary btn-lg shadow" data-toggle="modal" data-target="#myModal{{ h.num }}"> ' +
                  '{{ h.location }}' +
                  '</button> ' +

                  '<div class="modal fade text-left" id="myModal{{ h.num }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static"> ' +
                    '<div class="modal-dialog" role="document"> ' +
                      '<div class="modal-content"> ' +
                        '<div class="modal-header"> ' +
                          '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> ' +
                          '<h4 class="modal-title" id="myModalLabel">{{ h.location }}</h4> ' +
                        '</div> ' +
                        '<div class="modal-body"> ' +
                           '<p>{{ h.details }}</p>' +
                           '<img class="img-responsive img-rounded" src="{{ h.img }}" alt="Picture of {{ h.location }} lab"/>' +
                        '</div> ' +
                        '<div class="modal-footer"> ' +
                          '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button> ' +
                        '</div> ' +
                      '</div> ' +
                    '</div> ' +
                  '</div>'
  };
});

app.controller('labsCTRL', function($scope) {

// TODO: needs 'Accounts','Lab Rules', and 'Report a Problem?' sections in the modal'

  var location = "network";

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
                for faster burning to Disc. "
    },
    {
      location: "C122 Open Lab",
      num     : "1",
      img     : "img/labs/c122.jpg",
      details : "6 PCs running Windows 7. HP B&W LaserJet printer. Scanner. 2 large whiteboards."
    },
    {
      location: "B118 24x7 Open Lab",
      num     : "2",
      img     : "img/labs/b118.png",
      details : "10 PCs running Windows 7. HP B&W LaserJet printer. The machines \
                maintained by the Computer Science Dept are on the far right side of the room. "
    },
    {
      location: "C228 Open Lab",
      num     : "3",
      img     : "img/labs/c228.jpg",
      details : "3 PCs running Windows 7. HP B&W LaserJet printer. \
                This is primarily a lab for the Graduate Students."
    },
    {
      location: "C012 Gentoo Linux Classroom Lab",
      num     : "4",
      img     : "img/labs/c012.jpg",
      details : "24 PCs running Gentoo Linux. HP B&W LaserJet printer. Scanner. "
    },
    {
      location: "B118 24x7 Open Lab",
      num     : "5",
      img     : "img/labs/b118.png",
      details : "2 PCs running Gentoo Linux. (In addition to 10 Windows 7 PCs)"
    },
    {
      location: "DH1240 Network Security/VOIP Classroom",
      num     : "6",
      img     : "img/labs/c014.png",
      details : "Currently reserved for NCS class' with workspaces for assigned student projects at the networking pods."
    },
    {
      location: "Xen Virtual Machine Server",
      num     : "7",
      img     : "img/labs/xen.gif",
      details : "The XenServer is capable of running many virtual machines for classes and personal use."
    }
  ]

});
