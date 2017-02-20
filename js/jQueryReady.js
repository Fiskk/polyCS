/*
The majority of this script runs once the HTML has rendered and requires jQuery.
Its primary purpose is to pop or push CSS classes onto or off from HTML elements.
*/

// the var below is used for nav-button toggle
var change = true;

//this function handles the typing animations
$(function(){
    $("#typing").typed({
      strings: ["Welcome"],
      typeSpeed: 100,
      startDelay: 1000,
      backSpeed: 50
    });
});

$(document).ready(function() {  

  // apply styles on initial page load based on screen width
  if($(window).width() < 679) {
    $("#logoDiv").removeClass("header");
    $("#logoImg").removeClass("padding");
    $("#navtabs").removeClass("nav-tabs");
    $(".links").removeClass("oneSixth");

    $("#roundMyLeft").removeClass("roundedLeft");
    $("#roundMyRight").removeClass("roundedRight");

    $("#footer").removeClass("roundedBottomCorners");
    $("#firstP").removeClass("marginLeft");
    $("#blueNav").removeClass("roundedTopCorners");

    $("#roundMyLeft2").removeClass("roundedLeft");
    $("#roundMyRight2").removeClass("roundedRight");

    $(".format").addClass("text-left");
    $(".jumbotron").addClass("shadow");
    $("#contactInfo").addClass("text-center");
    $(".addAttr").attr("data-toggle", "collapse");
  }
  else {
    $("#logoDiv").addClass("header");
    $("#logoImg").addClass("padding");
    $("#navtabs").addClass("nav-tabs");
    $(".links").addClass("oneSixth");

    $("#roundMyLeft").addClass("roundedLeft");
    $("#roundMyRight").addClass("roundedRight");

    $("#footer").addClass("roundedBottomCorners");
    $("#firstP").addClass("marginLeft");
    $("#blueNav").addClass("roundedTopCorners");
    $(".format").removeClass("text-left");
    $(".jumbotron").removeClass("shadow");
    $("#contactInfo").removeClass("text-center");

    $("#roundMyLeft2").addClass("roundedLeft");
    $("#roundMyLeft2").removeClass("roundedRight");

    $(".addAttr").removeAttr("data-toggle");
  }

  // when resize events are occurring, apply or remove styles at breakpoints
  $(window).resize(function() {
    if($(window).width() < 679) {
      $("#logoDiv").removeClass("header");
      $("#logoImg").removeClass("padding");
      $("#navtabs").removeClass("nav-tabs");
      $(".links").removeClass("oneSixth");

      // remove class that rounds the left on-hover corners of nav
      $("#roundMyLeft").removeClass("roundedLeft");
      $("#roundMyRight").removeClass("roundedRight");

      $("#footer").removeClass("roundedBottomCorners");
      $("#firstP").removeClass("marginLeft");
      $("#blueNav").removeClass("roundedTopCorners");

      // remove class that rounds the left on-hover corners of nav
      $("#roundMyLeft2").removeClass("roundedLeft");
      $("#roundMyRight2").removeClass("roundedRight");

      $(".format").addClass("text-left");
      $(".jumbotron").addClass("shadow");
      $("#contactInfo").addClass("text-center");
      $(".addAttr").attr("data-toggle", "collapse");
    }
    else {
      $("#logoDiv").addClass("header");
      $("#logoImg").addClass("padding");
      $("#navtabs").addClass("nav-tabs");
      $(".links").addClass("oneSixth");

      // round the left on-hover corners of nav
      $("#roundMyLeft").addClass("roundedLeft");
      $("#roundMyRight").addClass("roundedRight");

      $("#footer").addClass("roundedBottomCorners");
      $("#firstP").addClass("marginLeft");
      $("#blueNav").addClass("roundedTopCorners");
      $(".format").removeClass("text-left");
      $(".jumbotron").removeClass("shadow");
      $("#contactInfo").removeClass("text-center");

      // round the right on-hover corners of nav 
      $("#roundMyLeft2").addClass("roundedLeft");
      $("#roundMyLeft2").removeClass("roundedRight");

      $(".addAttr").removeAttr("data-toggle");
    }
  });

});

// This is invoked on xs/sm screens when the nav button is clicked
function toggleChevron() {
  $("#control").toggleClass("glyphicon-triangle-top", change);
  $("#control").toggleClass("glyphicon-menu-hamburger", !change);
  change = !change
}

