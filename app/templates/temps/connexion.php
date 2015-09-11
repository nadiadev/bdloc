<?php $this->layout('layout', ['title' => 'Se connecter']) ?>
	
	<?php $this->start('main_content') ?>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<!--link rel="stylesheet" type="text/css" href="<= $this->assetUrl('css/style.css')"-->
		<h2>Connexion</h2> <br />

		<div class="login">	
		<p> Veuillez renseigner les champs suivants </p><br />
			
			<form method="POST" novalidate action="" >
				<label>Username</label>
				<div><input type="text" id='username' name='username'></div>

				<label>Mot de passe </label>
				<div><input type="password" id='password' name='password'></div><br />

				<input type="submit" name="Valider">
				<!--input type="reset" name="reset"-->
			</form>
			<div>
				
			</div>
		</div>

	<?php $this->stop('main_content') ?>

