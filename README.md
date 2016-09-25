# polyCS

- Developmental Version of SUNY Polytechnic CompSci Department. Built with Bootstrap,
  jQuery, and AngularJS. I had to resolve some minor conflicts to integrate some things.

- There are quite a few open issues that could be resolved, so don't be shy to make a
  pull request! I am definitely not opposed to refactors, or the addition of unit tests.  

- I am using a lot of textbook Bootstrap code. I am also pushing and popping elements
  onto and off from HTML elements with jQuery, and TypedJS is a jQuery plugin.

- I was initially serving a different font to Windows clients because the Audiowide
  font was not displaying properly. I was sniffing and using jQuery to override
  Audiowide with the current font, but even after creating a bunch of wet spaghetti
  in the controllers, I still could not override all the Audiowide text because
  the ng-repeat directive that I'm using on quite a few of the views was being rendered
  dead last and the css I was injecting would miss the output from the Angular expressions.
  I toyed with creating my own Angular filter that I could pipe the
  expressions through, but this would have created more spaghetti because it didn't
  work as expected and there are some areas within Angular where I lack enough depth
  at the moment to achieve what I want quickly.

  If (deadlines) {return simpleSolution};

  I reverted to using Russo-One for all clients. Way to go m$!!!!
