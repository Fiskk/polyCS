angular.module("myApp").component('spacer', {
  template:
    '<br class="hidden-xs">'
}),
app.controller('contactCTRL', function($scope) {

  //this function handles the typing animations
  $(function(){
      $("#typing").typed({
        //strings: ["First sentence.", "Second sentence."],
        //^ Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
        strings: ["Contact Info"],
        typeSpeed: 50,
        startDelay: 1000,
        backSpeed: 30
      });
  });

  $scope.contactList = [
    {name: 'Chris Urban', url: "http://www.cs.sunyit.edu/php-bin/form-mail.php?recip=urbanc"},
    {name: 'Bruno Andriamanalimanana', url: "http://www.cs.sunyit.edu/php-bin/form-mail.php?recip=fbra"},
    {name: 'Roger Cavallo', url: "http://www.cs.sunyit.edu/php-bin/form-mail.php?recip=roger"},
    {name: 'Amos Confer', url: "http://www.cs.sunyit.edu/php-bin/form-mail.php?recip=amos"},
    {name: 'John Marsh', url: "http://www.cs.sunyit.edu/php-bin/form-mail.php?recip=fjam"},
    {name: 'Rosemary Mullick', url: "http://www.cs.sunyit.edu/php-bin/form-mail.php?recip=rosemary"},
    {name: 'Jorge Novillo', url: "http://www.cs.sunyit.edu/php-bin/form-mail.php?recip=jorge"},
    {name: 'Ron Sarner', url: "http://www.cs.sunyit.edu/php-bin/form-mail.php?recip=ron"},
    {name: 'Sam Sengupta', url: "http://www.cs.sunyit.edu/php-bin/form-mail.php?recip=sengupta"},
    {name: 'Scott Spetka', url: "http://www.cs.sunyit.edu/php-bin/form-mail.php?recip=scott"}
  ];

});
