<div class="affiche" data-id="<?= $book['id']; 	?>">
	
		<div class="image"><img src="<?php echo $this->assetUrl('thumbnails_cover/'.$book['cover']) ?>" /></div>
		<div class="text"><br /><br /><p><?php echo 
		"Titre : ".$book['title']."<br /> 
		Illustrateur : ".$book['illuLastName']."<br />
		Scénariste : ".$book['scenaLastName']."<br />
		Coloriste : ".$book['colorLastName']."<br />
		Né(e) le  :".$book['illuBirthDate']." <br />
		Décès le :".$book['illuDeathDate']." <br />
		Pays :".$book['illuCountry']." <br />
		"?></p></div>
		<!-- <div class="details"><a href="details.php">Plus de details</a></div> -->
<?php if($book['stock'] > 0){				?>
 		<button id="panier" data-id="<?= $book['id'];?>" data-path="<?php echo $this->url('ajout-panier');?>">Ajouter au panier</button>
<?php }else{								?>
		<span>Cette BD est temporairement indisponible</span>	
<?php }										?>
 		<span id="successAdd" style="display: none;">Cette BD a été ajoutée à votre panier</span>
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