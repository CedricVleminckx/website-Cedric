$(document).ready(function() {
  var map;
  window.onload = function() {
    initMap();
  };

  //Initialize google map
  function initMap() {
    var home = {lat: 50.972516, lng: 4.385357};
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 16,
      center: home
    });
    //Place home marker
    var marker = new google.maps.Marker({
      position: {lat: 50.972516, lng: 4.385357},
      map: map,
      clickable: true
    });
  }
});
