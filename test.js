// NOTE: this is just a scratchpad

var string1 = 'https://banner.sunyit.edu/pls/prod/swssschd.P_ShowSchd?term_in=';
var year = '2016';
var month = '9';
var string2 = '&amp;disc_in=CS';

function inject() {
  console.log(string1.concat(year, month, string2));
}

inject();
