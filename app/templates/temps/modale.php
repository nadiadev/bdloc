<div class="affiche" data-id="<?= $book['id']; 	?>">
	
		<div class="image"><img src="<?php echo $this->assetUrl('thumbnails_cover/'.$book['cover']) ?>" /></div>
		<div class="text"><br /><br /><p><?php echo 
		"Titre : ".$book['title']."<br /> 
		Illustrateur : ".$book['illuLastName']."<br />
		Scenariste : ".$book['scenaLastName']."<br />
		Coloriste : ".$book['colorLastName']."<br />
		Username : ".$w_user['username']."<br />
		BirthDate :".$book['illuBirthDate']." <br />
		DeathDate :".$book['illuDeathDate']." <br />
		Country :".$book['illuCountry']." <br />".
		"Disponible: <br />
		"?></p></div>
		<!-- <div class="details"><a href="details.php">Plus de details</a></div> -->
 		<button id="panier" data-id="<?= $book['id'];?>" data-path="<?php echo $this->url('ajout-panier');?>">Ajouter au panier</button>
 		<span id="successAdd">Cette BD a été ajoutée à votre panier</span>
 		<script type='text/javascript'>

 		$('#panier').on('click',function(event){
 			var that = $(this);
 			var path = that.attr('data-path');
 			var bookId = that.attr('data-id');
 			$.ajax({
 				url: path,
 				data:{
 					id: bookId,
 				},
 			})
 			.done(function(){
 				that.css({'display':'none'});
 				$('#successAdd').css({'display':'inline'});

 			});
 		});

 		</script>
 		</div>