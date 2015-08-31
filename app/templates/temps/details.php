<?php $this->layout('layout', ['title' => 'Details']) ?>
   
   <?php $this->start('main_content') ?>
   <!--link rel="stylesheet" type="text/css" href="<= $this->assetUrl('css/style.css')"-->
      <h2>Details</h2>
      <title></title>
      <!-- On importe la bibliothèque JQuery-->
      <script src="JQuery-1.10.1.min.js" type="text/javascript"></script>
      
  
   <style>
   #fond {
   position:absolute;
   z-index:9000;
   background-color:#000;
   display:none;
   border-radius: 10px;
}

.popup {
   position:fixed;
   width:440px;
   height:200px;
   display:none;
   z-index:9999;
   padding:20px;
   border-radius: 10px;
   background-color: white;
   border: 1px solid gray;
}

#modal {
   width:300px;
   height:200px;
}

   </style>
      <div id="fond"></div>
      <a href="#" id="show">Afficher la fenetre modale</a>
      <script src="modal.js" type="text/javascript"></script>
      <div id="modal" class="popup"></div>
  
   <script>
  $(document).ready(function() {
   
   // Lorsque l'on clique sur show on affiche la fenêtre modale
   $('#show').click(function (e) {
       //On désactive le comportement du lien
        e.preventDefault();
      showModal();
   });
   
   // Lorsque l'on clique sur le fond on cache la fenetre modale   
   $('#fond').click(function () {
      hideModal();
    });
   
   // Lorsque l'on modifie la taille du navigateur la taille du fond change
   $(window).resize(function () {
      resizeModal()
   });
   
}); 
  function showModal(){
   var id = '#modal';
   $(id).html('Voici ma fenetre modale<br/><a href="#" class="close">Fermer la fenetre</a>');
   
   // On definit la taille de la fenetre modale
   resizeModal();
   
   // Effet de transition     
   $('#fond').fadeIn(1000);   
   $('#fond').fadeTo("slow",0.8);
   // Effet de transition   
   $(id).fadeIn(2000);
   
   $('.popup .close').click(function (e) {
      // On désactive le comportement du lien
      e.preventDefault();
      // On cache la fenetre modale
      hideModal();
    });
}
function hideModal(){
   // On cache le fond et la fenêtre modale
   $('#fond, .popup').hide();
   $('.popup').html('');
}
</script>
 <?php $this->stop('main_content') ?>