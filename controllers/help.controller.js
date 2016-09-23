app.controller('helpCTRL', function($scope) {

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
      acctSubtopics : [  'Connect to NetlabOpenVPN Server',
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

  // TODO: break this up into arrays for each topic and admit defeat
  $scope.subtopicsAndArrays = [
    { subtopic: 'Activate Your CS Account', url: 'http://www.cs.sunyit.edu/help/activate.php'},
    { subtopic: 'Changing Your CS Password', url: 'http://www.cs.sunyit.edu/help/passwd.php'},
    { subtopic: 'Resetting a CS Password', url: 'http://www.cs.sunyit.edu/help/msdnaa.php'},
    { subtopic: 'Microsoft Dreamspark (MSDNAA)', url: 'http://www.cs.sunyit.edu/help/reset.php'},
    { subtopic: 'C012 Games', url: 'http://www.cs.sunyit.edu/help/games.php'},
    { subtopic: 'Printing', url: 'http://www.cs.sunyit.edu/help/printing.php'},
    { subtopic: 'Scanning from C128 Copier', url: 'http://www.cs.sunyit.edu/help/copyroomScanner.php'},
    { subtopic: 'Using the Scanner in C012', url:'http://www.cs.sunyit.edu/help/scanner.php'},
    { subtopic: 'Connect to NetLab OpenVPN Server', url : 'http://www.cs.sunyit.edu/help/vpn2.php'},
    { subtopic: 'Connect with SSH using PuTTY', url : 'http://www.cs.sunyit.edu/help/ssh.php'},
    { subtopic: 'Email Services', url : 'http://www.cs.sunyit.edu/help/email.php'},
    { subtopic: 'mySQL Databases', url : 'http://www.cs.sunyit.edu/help/mysql.php'},
    { subtopic: 'NFS Services Explained', url : 'http://www.cs.sunyit.edu/help/nfs.php'},
    { subtopic: 'Personal Web Page Info', url : 'http://www.cs.sunyit.edu/help/www.php'},
    { subtopic: 'Restricing Access to Personal Web-Pages', url: 'http://www.cs.sunyit.edu/help/htaccess.php'},
    { subtopic: 'Secure Email Client Configuration', url: 'http://www.cs.sunyit.edu/help/spop.php'},
    { subtopic: 'Software Available to Students', url: 'http://www.cs.sunyit.edu/help/downloads.php'},
    { subtopic: 'Accessing Graphical Applications Remotely', url: 'http://www.cs.sunyit.edu/help/x11remote.php' },
    { subtopic: 'Connect to SSH with PuTTY', url: 'http://www.cs.sunyit.edu/help/ssh.php' },
    { subtopic: 'Encrypting Text With GNU Privacy Guard (GPG)', url: 'http://www.cs.sunyit.edu/help/gpg.php' },
    { subtopic: 'Transfer Files Between Machines Securely Using SCP', url: 'http://www.cs.sunyit.edu/help/scp.php' },
    { subtopic: 'Connect to Microsoft Remote Desktop Service', url: 'http://www.cs.sunyit.edu/help/rdp.php' },
    { subtopic: 'Connect to Unix Servers with PuTTY', url: 'http://www.cs.sunyit.edu/help/ssh.php' },
    { subtopic: 'Securely Transfer Files to Linux', url: 'http://www.cs.sunyit.edu/help/winscp.php' },
    { subtopic: 'Use PuTTY and Firefox to Tunnel a Connection', url: 'http://www.cs.sunyit.edu/help/puttytunneling2.php' },
    { subtopic: 'Windows User Profile', url: 'http://www.cs.sunyit.edu/help/winprofile.php' },
    { subtopic: 'Boot a DVD Through Xen', url: 'http://www.cs.sunyit.edu/help/bootdvd.php'},
    { subtopic: 'Boot Into Single-User Mode', url: 'http://www.cs.sunyit.edu/help/singleuser.php'},
    { subtopic: 'Configuring an IP-Address on CentOS', url: 'http://www.cs.sunyit.edu/help/centip.php'},
    { subtopic: 'Setting up DogNET CentOS Repository', url: 'http://www.cs.sunyit.edu/help/centrepo.php'}
  ];

  $scope.index = -1;

});
