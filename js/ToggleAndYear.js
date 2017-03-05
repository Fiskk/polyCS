
// this file generates the year in the footer
window.onload = function() {
  var date = new Date();
  document.getElementById("year").innerHTML = " " + date.getFullYear();
}

var change = true;
// This is invoked on xs/sm screens when the nav button is clicked
function toggleChevron() {
  $("#control").toggleClass("glyphicon-triangle-top", change);
  $("#control").toggleClass("glyphicon-menu-hamburger", !change);
  change = !change
}

// var Ubuntu = true;
// $("#FontChanger").click(function () {
//   if (Ubuntu == true) {
//     $("a,p,h1,h2,h3,h4,h5,h6,li,pre,button,label,input,textarea")
//     .css("font-family", "'Helvetica Neue', sans-serif");
//     Ubuntu = false;
//   }
//   else {
//     $("a,p,h1,h2,h3,h4,h5,h6,li,pre,button,label,input,textarea")
//     .css("font-family", "'Ubuntu', sans-serif");
//     Ubuntu = true;
//   }
// });
