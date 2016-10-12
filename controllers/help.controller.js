app.controller('helpCTRL', function($scope, $http) {

  $(function(){
      $("#typing").typed({
        // strings: ["First sentence.", "Second sentence."],
        // ^ Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
        strings: ["Help Docs"],
        typeSpeed: 100,
        startDelay: 1000,
        backSpeed: 50
      });
  });

  // NOTE: topics is accessed from the view by 'topic.property'. Note the lack of the 's'. IDKY???
  $scope.topics = [
    {
      title : "Accounts",
      number : 0,
      acctSubtopics : [  'Activate Your CS Account',
                         'Changing Your CS Password',
                         'Resetting a CS Password',
                         'Microsoft Dreamspark (MSDNAA)'
                       ],
        subtopicUrls : [
                          'http://www.cs.sunyit.edu/help/activate.php',
                          'http://www.cs.sunyit.edu/help/passwd.php',
                          'http://www.cs.sunyit.edu/help/reset.php',
                          'http://www.cs.sunyit.edu/help/msdnaa.php'
                       ]
    },
    {
      title : "Labs",
      number : 1,
      acctSubtopics : [
                        //  'C012 Games',
                         'Printing',
                         'Scanning from C128 Copier',
                         'Using the Scanner in C012'
                       ],
        subtopicUrls : [
                          // 'http://www.cs.sunyit.edu/help/printing.php',
                          '#printing',
                          // 'http://www.cs.sunyit.edu/help/copyroomScanner.php',
                          '#c128copier',
                          // 'http://www.cs.sunyit.edu/help/scanner.php'
                          '#c012scanner'
                       ]
    },
    {
      title : "Services",
      number : 2,
      acctSubtopics : [  'Connect to NetlabOpenVPN Server',
                         'Connect with SSH using PuTTY',
                         'Email Services',
                         'mySQL Databases',
                         'NFS Services Explained',
                         'Personal Web Page Info',
                         'Restricing Access to Personal Web-Pages'
                       ],
        subtopicUrls : [
                          // 'http://www.cs.sunyit.edu/help/vpn2.php',
                          '#vpn',
                          // 'http://www.cs.sunyit.edu/help/ssh.php',
                          '#putty',
                          // 'http://www.cs.sunyit.edu/help/email.php',
                          '#email',
                          // 'http://www.cs.sunyit.edu/help/mysql.php',
                          '#mysql',
                          // 'http://www.cs.sunyit.edu/help/nfs.php',
                          '#nfs',
                          // 'http://www.cs.sunyit.edu/help/www.php',
                          '#www',
                          // 'http://www.cs.sunyit.edu/help/htaccess.php'
                          '#htaccess'
                       ]
    },
    // {
    //   title : "General",
    //   number : 3,
    //   acctSubtopics : [  'Secure Email Client Configuration',
    //                      'Software Available to Students'
    //                   ],
    //   subtopicUrls : [
    //                     'http://www.cs.sunyit.edu/help/spop.php',
    //                     'http://www.cs.sunyit.edu/help/downloads.php'
    //                  ]
    // },
    {
      title : "Linux",
      number : 4,
      acctSubtopics : [  'Accessing Graphical Applications Remotely',
                         'Connect to SSH with PuTTY',
                         'Encrypting Text With GNU Privacy Guard (GPG)',
                         'Transfer Files Between Machines Securely Using SCP'
                      ],
      subtopicUrls : [
                        'http://www.cs.sunyit.edu/help/x11remote.php',
                        'http://www.cs.sunyit.edu/help/ssh.php',
                        'http://www.cs.sunyit.edu/help/gpg.php',
                        'http://www.cs.sunyit.edu/help/scp.php'

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
                       ],
        subtopicUrls : [
                          'http://www.cs.sunyit.edu/help/rdp.php',
                          'http://www.cs.sunyit.edu/help/ssh.php',
                          'http://www.cs.sunyit.edu/help/winscp.php',
                          'http://www.cs.sunyit.edu/help/puttytunneling2.php',
                          'http://www.cs.sunyit.edu/help/winprofile.php'
                       ]
    },
    {
      title : "Xen",
      number : 6,
      acctSubtopics : [  'Boot a DVD Through Xen',
                         'Boot Into Single-User Mode',
                         'Configuring an IP-Address on CentOS',
                         'Setting up DogNET CentOS Repository'
                       ],
        subtopicUrls : [
                          'http://www.cs.sunyit.edu/help/bootdvd.php',
                          'http://www.cs.sunyit.edu/help/singleuser.php',
                          'http://www.cs.sunyit.edu/help/centip.php',
                          'http://www.cs.sunyit.edu/help/centrepo.php'
                       ]
    }
  ];

  $scope.index = -1;

});
