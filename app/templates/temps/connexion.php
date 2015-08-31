<?php $this->layout('layout', ['title' => 'Se connecter']) ?>
	
	<?php $this->start('main_content') ?>
	<!--link rel="stylesheet" type="text/css" href="<= $this->assetUrl('css/style.css')"-->
		<h2>Connexion</h2>

		<p> Veuillez renseigner les champs suivants </p>
		<div class="forme">	
			
			<form method="POST" novalidate action="" >
				<label>Username</label>
				<input type="text" id='username' name='username'><br />	

				<label>Mot de passe </label>
				<input type="password" id='password' name='password'><br />

				<input type="submit" name="Valider">
				<!--input type="reset" name="reset"-->
			</form>
			<div>
				
			</div>
		</div>

	<?php $this->stop('main_content') ?>

