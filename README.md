# polyCS

- **SUNY Polytechnic Utica Computer Science Department website**

- Built with Bootstrap, jQuery, AngularJS 1.x, and AngularUI. 

- The repo contains all the necessary dependencies to run the client-side stuff, so simply cloning the repo should get you up and running since Angular is served locally instead of from a CDN. *But*, if you would rather try something cool...

- ...or you would prefer to throw together a more proper dev environment, but you're lazy like me, <a href="https://github.com/bylexus/docker-apache-php53/">this Docker container</a> comes with Apache and PHP preinstalled, which is essentially what we're running at present (albeit on FreeBSD instead of Ubuntu).

- There are several open issues that could be resolved, so don't be shy about making a
  pull request!
  
- Refactors or design tweaks are encouraged.
  
- If you have questions, feel free to ask: bakerdp@sunyit.edu.   

- Make sure you keep your local branch up to date.

- If you make a change to a CSS or JS file, append a faux GET parameter or increment the one that already exists in the reference to the file so that clients will request the new file as opposed to loading old source from cache. (Looking at you Chrome....)<br />EX: **src="controllers/labs.controller.js?version=1.1"**

- Note: using non-minified version of Angular will allow you to see complete error messages
