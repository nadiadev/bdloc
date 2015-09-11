<?php $this->layout('layout', ['title' => ' Bdloc']) ?>

<?php $this->start('main_content') ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	
	<title>BDLOC</title>
</head>
<body>

<h2> ACCUEIL</h2>
<h3>Concept BDLOC, location de BD nouveau genre </h3></br>

<div class="pitch">
	<p>Les abonnées à bdloc.fr louent leurs bandes-dessinées par internet. 
		Celles-ci sont choisies directement
 		sur le catalogue en ligne, et livrées à un point relais 
 		près de chez-eux. Après les 
		avoir lu, l'abonné les réexpédies par le point relais, 
		et peut alors en commander de nouvelles.
	</p>

		<div class="container">

			<div class="decouverte">
				<a href="<?= $this->url('abonnement'); ?>" title="abonnement">Découvrez et Inscrivez-vous !</a>
			</div>

			<div class="identification">
				<a href="<?= $this->url('connexion'); ?>" title="connexion">Déjà abonné ? Connectez-vous !</a>
			</div>
		</div>

</div>
</body>
<?php $this->stop('main_content') ?>
</html>