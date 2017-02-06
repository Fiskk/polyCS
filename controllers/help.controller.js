app.controller('helpCTRL', function($scope, $http, $location, $anchorScroll) {

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
  // This allows for in-page <a> linking
  $scope.scrollTo = function(id) {
    $location.hash(id);
    $anchorScroll();
  }

  $scope.index = -1;

  // NOTE: Topics is accessed from the view by 'topic.property'. Note the lack of the 's'.
  $scope.topics = [
    {
      title : "Accounts",
      number : 0,
      acctSubtopics : [  'Activate Your CS Account',
                         'Changing Your CS Password',
                         'Resetting a CS Password',
                         'Microsoft Imagine (Free Microsoft Products)'
                       ],
        subtopicUrls : [
                          '#activate',
                          '#password',
                          '#resetpw',
                          '#msdnaa'
                       ]
    },
    {
      title : "Services",
      number : 2,
      acctSubtopics : [
                         'Printing',
                         'Connect to NetlabOpenVPN Server',
                         'Connect with SSH using PuTTY',
                         'Email Services',
                         'mySQL Databases',
                         'NFS Services Explained',
                         'Personal Web Page Info',
                         'Restricing Access to Personal Web-Pages'
                       ],
        subtopicUrls : [
                          '#printing',
                          '#vpn',
                          '#putty',
                          '#email',
                          '#mysql',
                          '#nfs',
                          '#www',
                          '#htaccess'
                       ]
    },
    {
      title : "Linux",
      number : 3,
      acctSubtopics : [
                         'Accessing Graphical Applications Remotely',
                         'Connect to SSH with PuTTY',
                         'Encrypting Text With GNU Privacy Guard (GPG)',
                         'Transfer Files Between Machines Securely Using SCP'
                      ],
      subtopicUrls : [
                        '#remotegui',
                        '#putty',
                        '#gpg',
                        '#scp'

                     ]
    },
    {
      title : "Windows",
      number : 4,
      acctSubtopics : [  'Connect to Microsoft Remote Desktop Service',
                         'Connect to Unix Servers with PuTTY',
                         'Securely Transfer Files to Linux',
                         'Use PuTTY and Firefox to Tunnel a Connection',
                         'Windows User Profile'
                       ],
        subtopicUrls : [
                          '#rdp',
                          '#putty',
                          '#winscp',
                          '#tunneling',
                          '#winprofile'
                       ]
    },
    {
      title : "Xen",
      number : 5,
      acctSubtopics : [
                         'Boot a DVD Through Xen',
                         'Boot Into Single-User Mode',
                         'Configuring an IP-Address on CentOS',
                         'Setting up DogNET CentOS Repository'
                       ],
        subtopicUrls : [
                          '#bootdvd',
                          '#singleuser',
                          '#centip',
                          '#centrepo'
                       ]
    }
  ];
});
