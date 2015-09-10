<?php $this->layout('layout', ['title' => ' Panier BDLOC']) ?>

<?php $this->start('main_content') ?>
<style 
validCart>input{
	width:200px;
	height:40px;
}

</style>
<section>
<nav>
	<ul>
		<li><h4>Bdloc</h4></li>
		<li><a href="<?php echo $this->url('catalogue');?>" >Les bd</a></li>
		<li><a href="" >Mon panier</a></li>
		<li><a href="" >Mon compte</a></li>
		<!-- <li><a href="">Retour catalogue</a></li> -->
		<li><a href="<?php echo $this->url('maps');?>">Point Relais</a></li>
	</ul>
	<div class="bonjour">
		Bonjour : <?php  echo $w_user['username'];?><br />
		<br />
		<a href="">deconnexion</a>
	</div>

</nav>

<hr /> 
<div class="box">
	<?php if(!empty($paniers)){


	 foreach($paniers as $panier){  ?>
	<div class="affiche" data-id="<?= $panier['panierId'] ?>">
		<div class="image"><img src="<?php echo $this->assetUrl('thumbnails_cover/'.$panier['cover']) ?>" /></div> 
		<div class="text"><br /><br /><p><?php echo "Panier id : ".$panier['panierId']."</br> bd id:". $panier['bdId'] ?></p></div>
		<!-- <div class="details"><a href="details.php">Plus de details</a></div> -->
		<!-- <button class="details">Valider le panier</button>-->
		
	</div>
	
	

	<?php
	}
} else{
	echo "OUPS votre panier est vide";
}
?>
</div>
<br /><br />
<div id="validCart" class ="validCart" name="validCart">
	<form method="GET">
		<input type="submit" value="VALIDER LE PANIER" /> 
	</form>
	</div>
</section>

 
<?php $this->stop('main_content') ?>