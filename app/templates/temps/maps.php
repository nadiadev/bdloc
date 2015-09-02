<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
      #map { height: 100%; }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script type="text/javascript">

// var map;

// function initMap() {
//   map = new google.maps.Map(document.getElementById('map'), {
//     center: {lat: 48.8534275, lng: 2.3582787999999937},
//     zoom: 13
//   }); 
/*Debut de la modif*/
 var marker;

function initMap() {
   var map = new google.maps.Map(document.getElementById('map'), {
     zoom: 13,
     center: {lat: 48.8534275, lng: 2.3582787999999937}
   });

   /*************** Tour Eiffel ****************************/
   marker = new google.maps.Marker({
     map: map,
     draggable: true,
     animation: google.maps.Animation.DROP,
     position: {lat: 48.85837009999999, lng:  2.2944813000000295}
   });
   marker.addListener('click', toggleBounce); 

   /********** Annexe Point Relais ***********************/

   marker = new google.maps.Marker({
     map: map,
     title: "Cordonnerie Serrurerie Grenelle - 165 rue de Grenelle Paris 75007",
     draggable: true,
     animation: google.maps.Animation.DROP,
     position: {lat:  48.8575684, lng:    2.305731299999934}
   }); 
   marker.addListener('click', toggleBounce);

   marker = new google.maps.Marker({
     map: map,
     title: "f",
     draggable: true,
     animation: google.maps.Animation.DROP,
     position: {lat:  48.8542002, lng:    2.3235780999999633}
   }); 
   marker.addListener('click', toggleBounce);

   marker = new google.maps.Marker({
     map: map,
     title: "e",
     draggable: true,
     animation: google.maps.Animation.DROP,
     position: {lat:  48.8475683, lng:   2.351138600000013}
   });
   marker.addListener('click', toggleBounce);

   marker = new google.maps.Marker({
     map: map,
     title: "d",
     draggable: true,
     animation: google.maps.Animation.DROP,
     position: {lat:  48.8479797, lng:  2.3652867000000697}
   });
   marker.addListener('click', toggleBounce);

   marker = new google.maps.Marker({
     map: map,
     title: "c",
     draggable: true,
     animation: google.maps.Animation.DROP,
     position: {lat: 48.86368539999999, lng:  2.3527358999999706}
   });
   marker.addListener('click', toggleBounce);

   marker = new google.maps.Marker({
     map: map,
     title: "b",
     draggable: true,
     animation: google.maps.Animation.DROP,
     position: {lat: 48.8698981, lng:  2.3502657999999883}
   });
   marker.addListener('click', toggleBounce);

   marker = new google.maps.Marker({
     map: map,
     title: "a",
     draggable: true,
     animation: google.maps.Animation.DROP,
     position: {lat: 48.8685692, lng:  2.3356083999999555}
   });
   marker.addListener('click', toggleBounce);
}
   /*********** Fin de l'Annexe Point Relais*************/

function toggleBounce() {
   if (marker.getAnimation() !== null) {
     marker.setAnimation(null);
   } else {
     marker.setAnimation(google.maps.Animation.BOUNCE);
   }
}
  
    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBBPUXgtFypy3PCY6HB-gUoZj4klGUzO8&callback=initMap">
    </script>
  </body>
</html>