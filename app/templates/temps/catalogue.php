<?php $this->layout('layout', ['title' => ' Catalogue BDLOC']) ?>

<?php $this->start('main_content') ?>
<?php 
$start = 20;
// Affichage par nombre de bd

if (!empty($_GET['start'])){
	$start = $_GET['start'];

}
?>
<style>
#showDetails{
	
	width:50%;
	margin:0 auto;
	margin-top: 10%;
	margin-left:25%;
	z-index: 9999;
	position: fixed;
	background-color: #ccc;
}
#close{
	border:solid 3px;
}
#panier{
	margin:auto;
	width: 33 %;
	height: 15%;
	color:#fff;
	padding:5px;
	font-size: 20px;
	
	background-color: black;
}
h5{
	font-variant: small-caps;
}
#dispoValid{
	font-weight: 700;

}

</style>
<nav>
	<ul>
		<li><h4>Bdloc</h4></li>
		<li><a href="" >Les bd</a></li>
		<li><a href="<?php echo $this->url('panierShow');?>" >Mon panier</a></li>
		<li><a href="" >Mon compte</a></li>

	</ul>
	<div class="bonjour">
		Bonjour :  <?php  echo $w_user['username'];?><br />
		<br />
		<a href="<?php echo $this->url('home');?>">deconnexion</a>
	</div>

</nav>

<hr />


<div class="filtres">
	<h5>Catégories</h5><br />
	<form method="GET" action="<?php echo $this->url('catalogue')?>">
		<input type="checkbox" name="categories[]" value="polar" <?php if(in_array('polar', $categories)){ echo 'checked'; } ?>> Polar<br />
		<input type="checkbox" name="categories[]" value="historique" <?php if(in_array('historique', $categories)){ echo 'checked'; } ?>> Historique<br />
		<input type="checkbox" name="categories[]" value="tranche" <?php if(in_array('tranche', $categories)){ echo 'checked'; } ?>> Tranche de vie<br />
		<input type="checkbox" name="categories[]" value="aventure" <?php if(in_array('aventure', $categories)){ echo 'checked'; } ?>> Aventure<br />
		<input type="checkbox" name="categories[]" value="jeunesse" <?php if(in_array('jeunesse', $categories)){ echo 'checked'; } ?>> Jeunesse<br />
		<input type="checkbox" name="categories[]" value="fantastique" <?php if(in_array('fantastique', $categories)){ echo 'checked'; } ?>> Fantastique<br /><br />
		<h5>Disponibilité</h5>
		<input type="checkbox" name="disponible[]" value="disponible" <?php if(in_array('disponible', $disponible)){ echo 'checked'; } ?>>disponible<br />
		<input type="submit" id="dispoValid" value="Valider">
		<br /><br />
	</form>

	<form method="GET">
		<label>Recherche</label><br />
		<input type="text" name="recherche">
		<input type="submit" value="OK" /> 
	</form>
</div>

<div class="tri">
	<form>
		<select>
			<option>Date d'ajout au catalogue</option>
			<option>Ordre alphabétique de titres</option>
			<option>Date de publication</option>
		</select>
	</form>
</div>

<div class="nbr_bd">
	<form>
		<select name="number" id="byNumber">
			<option value="20">20 Bds</option>
			<option value="40">40 Bds</option>
			<option value="60">60 Bds</option>
		</select>
		<input type="submit" value="ok" />
	</form>
</div>

<div method="GET">
	<a href="?start=<?= $start-20 ?>">Précédent</a>
	<a href="?start=<?= $start+20 ?>">Suivant</a>
	
</div>

<div class="box" data-modale-path="<?= $this->url('modale'); ?>">
	<?php foreach($books as $book){ ?>
	<div class="affiche" data-id="<?= $book['id']; 	?>">
		<div class="image"><img src="<?php echo $this->assetUrl('thumbnails_cover/'.$book['cover']) ?>" /></div>
		<div class="text"><br /><br /><p><?php echo "Titre : ".$book['title']."<br /> Illustrateur : ".$book['illuLastName']."<br />Scenariste : ".$book['scenaLastName']."<br />Coloriste : ".$book['colorLastName']/*."<br />Categorie : ".$series['style']*/ ?></p></div>
		<!-- <div class="details"><a href="details.php">Plus de details</a></div> -->
		<button class="details">Plus de details</button>
	</div>
	<?php
}
?>
</div>

<div id="showDetails">
	<div>
		<!-- <a href="#close" title="close" class="close">retour</a> -->
		<script type="text/javascript" src="<?= $this->assetUrl('js/catalog.js'); ?>"></script>

	</div>

</div>

<?php $this->stop('main_content') ?>
