
// this file generates the year in the footer
window.onload = function() {
  var date = new Date();
  document.getElementById("year").innerHTML = " " + date.getFullYear();
}

// $("#play").click(function(){
//     alert("The paragraph was clicked.");
// });

