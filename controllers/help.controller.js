app.controller('helpCTRL', function($scope) {
  $(function(){
      $("#typing").typed({
        // strings: ["First sentence.", "Second sentence."],
        // ^ Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
        strings: ["Welcome", "We're glad you're here."],
        typeSpeed: 100,
        startDelay: 1000,
        backSpeed: 50
      });
  });
});
