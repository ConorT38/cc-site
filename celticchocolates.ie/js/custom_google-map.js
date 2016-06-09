/*------------------------------------------------------------------
Project:    Beatrix
Author:     Yevgeny Simzikov
URL:        http://simpleqode.com/
            https://twitter.com/YevSim
Version:    1.0.1
Created:        14/10/2014
Last change:    18/02/2015
-------------------------------------------------------------------*/


/* -------------------- *\
    #GOOGLE MAP
\* -------------------- */

/* Requires Google Maps API */

/**
 * Google Map: Contact Us section & page
 */

function initialize() {
  var myLatlng = new google.maps.LatLng(53.4813774,-6.741290915); // Change your location
  var mapOptions = {
    zoom: 8, // Change zoom value
    scrollwheel: false, // Change to "true" to enable users scale map on scroll
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Celtic Chocolates' // Change the pinpoint popup text
  });
}

google.maps.event.addDomListener(window, 'load', initialize);