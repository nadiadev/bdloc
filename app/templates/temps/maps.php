<?php $this->layout('layout', ['title' => 'Les Point Relais']) ?>
   
<?php $this->start('main_content') ?></br>
<a href="<?php echo $this->url('catalogue');?>" >Les bd</a>
<div id="map"></div>
      <!-- <!DOCTYPE html> -->
        <!--html>
        <head> -->

      <!--style type="text/css">
          html, body { height: 100%; margin: 0; padding: 0; }
          #map { height: 900px; }
      </style-->
      
<!--/**** Debut de la modif ****/ -->

<script type="text/javascript">

 var marker;

function initMap() {
 var position = new google.maps.LatLng(48.8534275,2.3582787999999937);
   var map = new google.maps.Map(document.getElementById('map'), {
     zoom: 13,
     center: position   //:{lat: 48.8534275, lng: 2.3582787999999937}
   });

   /*************** Tour Eiffel ****************************/
   marker = new google.maps.Marker({
     map: map,
     draggable: true,
     animation: google.maps.Animation.DROP,
     position: {lat: 48.85837009999999, lng: 2.2944813000000295}
   });
   marker.addListener('click', toggleBounce); 

   /********** Annexe Point Relais ***********************/

   marker = new google.maps.Marker({
     map: map,
     title: "Cordonnerie Serrurerie Grenelle \n 165 rue de Grenelle \n 75007 Paris ",
     draggable: true,
     animation: google.maps.Animation.DROP,
     position: {lat:  48.8575684, lng:    2.305731299999934}
   }); 
   marker.addListener('click', toggleBounce);

   marker = new google.maps.Marker({
     map: map,
     title: "Aux Fleurs du Bac \n 69 Rue du bac \n 75007 Paris",
     draggable: true,
     animation: google.maps.Animation.DROP,
     position: {lat:  48.8542002, lng:    2.3235780999999633}
   }); 
   marker.addListener('click', toggleBounce);

   marker = new google.maps.Marker({
     map: map,
     title: "Game Cash / CG Paris 5 \n 21 Rue Monge \n 75005 Paris",
     draggable: true,
     animation: google.maps.Animation.DROP,
     position: {lat:  48.8475683, lng:   2.351138600000013}
   });
   marker.addListener('click', toggleBounce);

   marker = new google.maps.Marker({
     map: map,
     title: "BM Pressing \n 4Bis Bd Morland \n 75004 Paris",
     draggable: true,
     animation: google.maps.Animation.DROP,
     position: {lat:  48.8479797, lng:  2.3652867000000697}
   });
   marker.addListener('click', toggleBounce);

   marker = new google.maps.Marker({
     map: map,
     title: "Hypso Reprographie \n 53 Rue Montmorency \n 75003 Paris",
     draggable: true,
     animation: google.maps.Animation.DROP,
     position: {lat: 48.86368539999999, lng:  2.3527358999999706}
   });
   marker.addListener('click', toggleBounce);

   marker = new google.maps.Marker({
     map: map,
     title: "Telecom Star \n 15 Bd de Bonne Nouvelle \n 75002 Paris",
     draggable: true,
     animation: google.maps.Animation.DROP,
     position: {lat: 48.8698981, lng:  2.3502657999999883}
   });
   marker.addListener('click', toggleBounce);

   marker = new google.maps.Marker({
     map: map,
     title: "LIBRIA \n 82 Passge Choiseul \n 75002 Paris",
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
  $(window).on('load',initMap);
  </script>


   <!-- // <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBBPUXgtFypy3PCY6HB-gUoZj4klGUzO8&callback=initMap"></script>  -->

       
  <!--/body-->
  <!--/html-->

<?php $this->stop('main_content') ?>