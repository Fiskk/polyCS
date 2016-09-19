app.controller('accountsCTRL', function($scope) {

  //this function handles the typing animations
  $(function(){
      $("#typing").typed({
        //strings: ["First sentence.", "Second sentence."],
        //^ Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
        strings: ["Account Maintenance"],
        typeSpeed: 50,
        startDelay: 1000,
        backSpeed: 30
      });
  });

  $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
  });

  $scope.topics = [
    {
      topic: 'Activate CS Account or Reset Forgotten Password',
      url: 'https://accounts.cs.sunyit.edu/activate.php',
      tooltip : 'Use this link to activate your CS account, or if you need to reset a forgotten password. (You will need your ITS Account info)'},
    {
      topic: 'Access the MSDN Downloads Site',
      url: 'http://msdn.cs.sunyit.edu/',
      tooltip : '.'},
    {
      topic: 'Request a MySQL Database Account',
      url: 'https://accounts.cs.sunyit.edu/mysql-request.php',
      tooltip : '.'},
    {
      topic: 'Change CS Password',
      url: 'https://accounts.cs.sunyit.edu/changepw.php',
      tooltip : '.'},
    {
      topic: 'Set Up Email Forwarding',
      url: 'https://accounts.cs.sunyit.edu/dotforward.php',
      tooltip : '.'},
    {
      topic: 'Create a Disposable Email Address',
      url: 'https://accounts.cs.sunyit.edu/disposable.php',
      tooltip : '.'},
    {
      topic: 'Create a URL Converter',
      url: 'http://nym.cs.sunyit.edu/redirect.php?add',
      tooltip : '.'}
  ];

});
