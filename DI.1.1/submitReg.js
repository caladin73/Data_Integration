var by1;
var by2;

var submit = function() {
  for ( i = 0; i < myObj.lenght; i++ ) {
    if (myObj[i].city === getElementById('by1').value) {
      by1 = myObj[i].city;
      break;
    }
  }
  for ( i = 0; i < myObj.lenght; i++ ) {
    if (myObj[i].city === getElementById('by2').value) {
      by2 = myObj[i].city;
      break;
    }
  }
  document.getElementById('result').innerHTML = getDistanceFromLatLonInKm(by1.lat,by1.lon,by2.lat,by2.lon);
}
