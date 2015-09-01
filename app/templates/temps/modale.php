<div class="affiche" data-id="<?= $book['id']; 	?>">
		<div class="image"><img src="<?php echo $this->assetUrl('thumbnails_cover/'.$book['cover']) ?>" /></div>
		<div class="text"><br /><br /><p><?php echo 
		"Titre : ".$book['title']."<br /> 
		Illustrateur : ".$book['illuLastName']."<br />
		Scenariste : ".$book['scenaLastName']."<br />
		Coloriste : ".$book['colorLastName']."<br />".
		"publisher : <br />".
		"BirthDate : <br />".
		"DeathDate : <br />".
		"Country : <br />".
		"Disponible: <br />
		"?></p></div>
		<!-- <div class="details"><a href="details.php">Plus de details</a></div> -->
 		<button id="panier">Ajouter au panier</button>
 		</div>