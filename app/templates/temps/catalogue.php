<?php $this->layout('layout', ['title' => ' Catalogue BDLOC']) ?>

<?php $this->start('main_content') ?>
<?php 
$start = 20;
// Affichage par nombre de bd
if (!empty($_GET['start'])){
	$start = $_GET['start'];

}
 ?>
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


<div class="filtres">
	<h5>Catégories</h5><br />
	<form action="">
		<input type="checkbox" name="disponible" value="disponible"> Polar<br>
		<input type="checkbox" name="disponible" value="disponible"> Historique<br>
		<input type="checkbox" name="disponible" value="disponible"> Tranche de vie<br>
		<input type="checkbox" name="disponible" value="disponible"> Aventure<br>
		<input type="checkbox" name="disponible" value="disponible"> Jeunesse<br>
		<input type="checkbox" name="disponible" value="disponible"> Fantastique<br>
		<br />
		<h5>Disponibilité</h5><br />
		<input type="checkbox" name="disponible" value="disponible"> disponible<br>
		<input type="checkbox" name="indisponible" value="indisponible" checked>indisponible<br>
		<input type="submit" value="Valider">
	</form>
	<br />

	<form method="GET" action="">
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





<div class="box">
	<?php foreach($books as $book){ ?>
	<div class="affiche">
		<div class="image"><img src="<?php echo $this->assetUrl('thumbnails_cover/'.$book['cover']) ?>" /></div>
		<div class="text"><br /><br /><p><?php echo "Titre : ".$book['title']."<br /> Illustrateur : ".$book['illuLastName']."<br />Scenariste : ".$book['scenaLastName']."<br />Coloriste : ".$book['colorLastName'] ?></p></div>
	</div>
	<?php
}
?>
</div>

<?php $this->stop('main_content') ?>
