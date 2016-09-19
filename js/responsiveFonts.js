// NOTE: This script is not currently in use as of 9/19/16


// sniff the OS so that we can increase readability of the font on m$ platforms
var osName = "Unknown OS";

if (window.navigator.userAgent.indexOf("Win") != -1) osName = "windows";
if (window.navigator.userAgent.indexOf("Mac") != -1) osName = "OSx";
if (window.navigator.userAgent.indexOf("X11") != -1) osName = "UNIX";
if (window.navigator.userAgent.indexOf("Linux") != -1) osName = "linux";
// TODO: get more comprehensive tests for windows platforms
//console.log('Your OS: ' + osName);

// the block below was in the ready function

// change font if Windows becaue m$ screws up Audiowide font
if(osName == "windows") {
  $("a,p,h1,h2,h3,h4,h5,h6,li,pre,button,label").css("font-family", "\'Russo One\', sans-serif");
}

// below was an experiment with filters
// app.filter('font', function() {
//   return function(val) {
//     if(osName == "windows") {
//       $("a,p,h1,h2,h3,h4,h5,h6,li,pre,button,label").css("font-family", "\'Russo One\', sans-serif");
//     }
//   };
// });
