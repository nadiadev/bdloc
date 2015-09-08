<?php $this->layout('layout', ['title' => ' Confirmation']) ?>

<?php $this->start('main_content') ?>
<style>
.box{
	margin:0 auto;
	margin-top: 30%;
	width:200px;
	height: 300px;
	border:solid 2px red;
}
.text{
	display:block;
}
</style>
<nav>
	<ul>
		<li><h4>Bdloc</h4></li>
		<li><a href="" >Les bd</a></li>
		<li><a href="" >Mon panier</a></li>
		<li><a href="" >Mon compte</a></li>

	</ul>
	<div class="bonjour">
		Bonjour<br />
		<br />
		<a href="">deconnexion</a>
	</div>

</nav>

<hr /> 


<div class="box">
	<?php foreach($bdlocs as $bdloc){  ?>
	 <div class="affiche" data-id="<?= $bdloc['id'] ?>">
		<!-- <div class="image"><img src="<?php //echo $this->assetUrl('thumbnails_cover/'.$bdloc['cover']) ?>" /></div> -->
		<div class="text"><br /><br /><p><?php echo "Titre : ".$bdloc['title']."Nombre : ".$bdloc['nbre_article']; ?></p></div>
		<!-- <div class="details"><a href="details.php">Plus de details</a></div> -->
		<button class="details">Valider le panier</button>
		<a href="catalogue.php">Retour catalogue</a>
	</div>
	<?php
}
?>
</div>
<?php $this->stop('main_content') ?>