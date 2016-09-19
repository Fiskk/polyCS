app.controller('helpCTRL', function($scope) {

  if(osName == "windows") {
    $("a,p,h1,h2,h3,h4,h5,h6,li,pre,button,label").css("font-family", "\'Russo One\', sans-serif");
  }
  $(function(){
      $("#typing").typed({
        // strings: ["First sentence.", "Second sentence."],
        // ^ Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
        strings: ["Help Topics"],
        typeSpeed: 100,
        startDelay: 1000,
        backSpeed: 50
      });
  });

  $scope.topics = [
    {
      title : "Accounts",
      number : 0,
      acctSubtopics : [ 'Activate Your CS Account',
                               'Changing Your CS Password',
                               'Resetting a CS Password',
                               'Microsoft Dreamspark (MSDNAA)'
                             ]
    },
    {
      title : "Labs",
      number : 1,
      acctSubtopics : [  'C012 Games',
                         'Printing',
                         'Scanning from C128 Copier',
                         'Using the Scanner in C012'
                       ]
    },
    {
      title : "Services",
      number : 2,
      acctSubtopics : [  'Connect ti NetlabOpenVPN Server',
                         'Connect with SSH using PuTTY',
                         'Email Services',
                         'mySQL Databases',
                         'NFS Services Explained',
                         'Personal Web Page Info',
                         'Restricing Access to Personal Web-Pages'
                       ]
    },
    {
      title : "General",
      number : 3,
      acctSubtopics : [  'Secure Email Client Configuration',
                         'Software Available to Students'
                      ]
    },
    {
      title : "Linux",
      number : 4,
      acctSubtopics : [  'Accessing Graphical Applications Remotely',
                         'Connect to SSH with PuTTY',
                         'Encrypting Text With GNU Privacy Guard (GPG)',
                         'Transfer Files Between Machines Securely Using SCP'
                      ]
    },
    {
      title : "Windows",
      number : 5,
      acctSubtopics : [  'Connect to Microsoft Remote Desktop Service',
                         'Connect to Unix Servers with PuTTY',
                         'Securely Transfer Files to Linux',
                         'Use PuTTY and Firefox to Tunnel a Connection',
                         'Windows User Profile'
                       ]
    },
    {
      title : "Xen",
      number : 6,
      acctSubtopics : [  'Boot a DVD Through Xen',
                         'Boot Into Single-User Mode',
                         'Configuring an IP-Address on CentOS',
                         'Setting up DogNET CentOS Repository'
                       ]
    }
  ];

  // $scope.acctSubtopics = [ 'Activate Your CS Account',
  //                          'Changing Your CS Password',
  //                          'Resetting a CS Password',
  //                          'Microsoft Dreamspark (MSDNAA)'
  //                        ];

});
