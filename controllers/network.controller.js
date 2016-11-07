// NOTE: this page is deprecated

app.controller('networkCTRL', function($scope) {

  //this function handles the typing animations
  $(function(){
      $("#typing").typed({
        //strings: ["First sentence.", "Second sentence."],
        //^ Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
        strings: ["Have an idea?", "Our Network Can Support It."],
        typeSpeed: 50,
        startDelay: 1000,
        backSpeed: 30
      });
  });

});
