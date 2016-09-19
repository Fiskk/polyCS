app.controller('networkCTRL', function($scope) {

  if(osName == "windows") {
    console.log("windows");
    $("a,p,h1,h2,h3,h4,h5,h6,li,pre,button,label").css("font-family", "\'Russo One\', sans-serif");
  }
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
