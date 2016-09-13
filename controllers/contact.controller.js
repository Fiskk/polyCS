angular.module("myApp").component('spacer', {
  template:
    '<br class="hidden-xs">'
}),
app.controller('contactCTRL', function($scope) {

  $scope.contactList = [
    {name: 'Chris Urban', url: "http://www.cs.sunyit.edu/php-bin/form-mail.php?recip=urbanc"},
    {name: 'Bruno Andriamanalimanana', url: "http://www.cs.sunyit.edu/php-bin/form-mail.php?recip=fbra"},
    {name: 'Roger Cavallo', url: "http://www.cs.sunyit.edu/php-bin/form-mail.php?recip=roger"},
    {name: 'Amos Confer', url: "http://www.cs.sunyit.edu/php-bin/form-mail.php?recip=amos"},
    {name: 'John Marsh', url: "http://www.cs.sunyit.edu/php-bin/form-mail.php?recip=fjam"},
    {name: 'Rosemary Mullick', url: "http://www.cs.sunyit.edu/php-bin/form-mail.php?recip=rosemary"},
    {name: 'Jorge Novillo', url: "http://www.cs.sunyit.edu/php-bin/form-mail.php?recip=jorge"},
    {name: 'Mike Pittarelli', url: "http://www.cs.sunyit.edu/php-bin/form-mail.php?recip=mike"},
    {name: 'Ron Sarner', url: "http://www.cs.sunyit.edu/php-bin/form-mail.php?recip=ron"},
    {name: 'Sam Sengupta', url: "http://www.cs.sunyit.edu/php-bin/form-mail.php?recip=sengupta"},
    {name: 'Scott Spetka', url: "http://www.cs.sunyit.edu/php-bin/form-mail.php?recip=scott"}
  ];

});
