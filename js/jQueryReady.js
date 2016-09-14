/*
The majority of this script runs once the HTML has rendered and requires jQuery
*/

// sniff the OS so that we can increase readability of the font on m$ platforms
var osName = "Unknown OS";

if (window.navigator.userAgent.indexOf("Win") != -1) osName = "windows";
if (window.navigator.userAgent.indexOf("Mac") != -1) osName = "OSx";
if (window.navigator.userAgent.indexOf("X11") != -1) osName = "UNIX";
if (window.navigator.userAgent.indexOf("Linux") != -1) osName = "linux";
// TODO: get more comprehensive tests for windows platforms
//console.log('Your OS: ' + osName);

// the var below is used for nav-button toggle
var change = true;

// this function handles the typing animations
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

$(document).ready(function() {
  $("#control").addClass('glyphicon-menu-hamburger');

  // change font if Windows becaue m$ screws up Audiowide font
  if(osName == "windows") {
    $("a,p,h1,h2,h3,h4,h5,h6").css("font-family", "\'Russo One\', sans-serif");
  }

  // apply styles on initial page load based on screen width
  if($(window).width() < 679) {
    $("#logoDiv").removeClass("header");
    $("#logoImg").removeClass("padding");
    $("#navtabs").removeClass("nav-tabs");
    $(".links").removeClass("oneSixth");
    $("#footer").removeClass("roundedBottomCorners");
    $("#firstP").removeClass("marginLeft");
    $("#blueNav").removeClass("roundedTopCorners");
    $(".format").addClass("text-left");
    $(".jumbotron").addClass("shadow");
    $("#contactInfo").addClass("text-center");
  }
  else {
    $("#logoDiv").addClass("header");
    $("#logoImg").addClass("padding");
    $("#navtabs").addClass("nav-tabs");
    $(".links").addClass("oneSixth");
    $("#footer").addClass("roundedBottomCorners");
    $("#firstP").addClass("marginLeft");
    $("#blueNav").addClass("roundedTopCorners");
    $(".format").removeClass("text-left");
    $(".jumbotron").removeClass("shadow");
    $("#contactInfo").removeClass("text-center");
  }

  // when resize events are occurring, apply or remove styles at breakpoints
  $(window).resize(function() {
    if($(window).width() < 679) {
      $("#logoDiv").removeClass("header");
      $("#logoImg").removeClass("padding");
      $("#navtabs").removeClass("nav-tabs");
      $(".links").removeClass("oneSixth");
      $("#footer").removeClass("roundedBottomCorners");
      $("#firstP").removeClass("marginLeft");
      $("#blueNav").removeClass("roundedTopCorners");
      $(".format").addClass("text-left");
      $(".jumbotron").addClass("shadow");
      $("#contactInfo").addClass("text-center");
    }
    else {
      $("#logoDiv").addClass("header");
      $("#logoImg").addClass("padding");
      $("#navtabs").addClass("nav-tabs");
      $(".links").addClass("oneSixth");
      $("#footer").addClass("roundedBottomCorners");
      $("#firstP").addClass("marginLeft");
      $("#blueNav").addClass("roundedTopCorners");
      $(".format").removeClass("text-left");
      $(".jumbotron").removeClass("shadow");
      $("#contactInfo").removeClass("text-center");
    }
  });
});

//this is invoked when the xs/sm nav button is clicked
function toggleChevron() {
  $("#control").toggleClass("glyphicon-triangle-top", change);
  $("#control").toggleClass("glyphicon-menu-hamburger", !change);
  change = !change
}
