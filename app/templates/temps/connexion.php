<?php $this->layout('layout', ['title' => 'Se connecter']) ?>
	
	<?php $this->start('main_content') ?>
	<!--link rel="stylesheet" type="text/css" href="<= $this->assetUrl('css/style.css')"-->
		<h2>Connexion</h2>

		<p> Veuillez renseigner les champs suivants </p>
		<div class="forme">	
			<form method="POST" action="">
				<label>Username</label>
				<input type="text" id='nam' name='username' value><br />		

				<label>Mot de passe </label>
				<input type="password" id='password' name='password' value><br />

				<input type="submit" name="Valider">
				<!--input type="reset" name="reset"-->
			</form>
		</div>

	<?php $this->stop('main_content') ?>

