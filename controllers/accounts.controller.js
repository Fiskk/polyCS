app.controller('accountsCTRL', function($scope) {

  //this function handles the typing animations
  $(function(){
      $("#typing").typed({
        //strings: ["First sentence.", "Second sentence."],
        //^ Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
        strings: ["CS Account Maintenance"],
        typeSpeed: 50,
        startDelay: 1000,
        backSpeed: 30
      });
  });


  $scope.tooltipPlacement = function () {
    return 'right';
  };

  $scope.topics = [
    {
      topic: 'Get a CS Account or Password-Reset',
      url: 'https://accounts.cs.sunyit.edu/activate.php',
      tooltip : 'Use this link to activate your CS account, or if you need to reset a forgotten password. (You will need your ITS Account info)'},
    {
      topic: 'Access the MSDN Downloads Site',
      url: '#msdnaa',
      tooltip : 'To download Microsoft software from the Microsoft Developer Network Academic website.'},
    {
      topic: 'Request a MySQL Database Account',
      url: 'https://accounts.cs.sunyit.edu/mysql-request.php',
      tooltip : 'To create an account for the mySQL database server or reset the password for an existing database account.'},
    {
      topic: 'Change CS Password',
      url: 'https://accounts.cs.sunyit.edu/changepw.php',
      tooltip : 'Change password for an already activated CS account.'},
    {
      topic: 'Set Up Email Forwarding',
      url: 'https://accounts.cs.sunyit.edu/dotforward.php',
      tooltip : 'Forward your CS Department account to another email address.'},
    {
      topic: 'Create a Disposable Email Address',
      url: 'https://accounts.cs.sunyit.edu/disposable.php',
      tooltip : 'To protect your primary account from spammers when posting to the Internet.'},
  ];

});
