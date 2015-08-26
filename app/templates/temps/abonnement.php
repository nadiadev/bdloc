<?php $this->layout('layout', ['title' => 'Nouvel abonnement']) ?>
	
	<?php $this->start('main_content') ?>
	<!--link rel="stylesheet" type="text/css" href="<= $this->assetUrl('css/style.css')"-->
		<h2>Inscription</h2>

		<p> Veuillez renseigner les champs suivants </p>
		<div class="forme">	
			<form method="POST" action="">
				<label>Username</label>
				<input type="text" id='nam' name='username' value><br />


				<label>Email</label>
				<input type="email" id='nam' name='email' value><br />

				<label>Mot de passe </label>
				<input type="password" id='password' name='password' value><br />

				<label>Confirm mot de passe </label>
				<input type="password" id='password' name='password_confirm' value><br /><br />

				<label>Nom</label>
				<input type="text" id='nom' name='nom' value><br />

				<label>Prenom</label>
				<input type="text" id='prenom' name='prenom' value><br />

				<label>Code_Postal</label>
				<input type="text" id='code_postal' name='code_postal' value><br />

				<label>Adress</label>
				<input type="text" id='adress' name='adress' value><br />

				<label>Tel</label>
				<input type="text" id='tel' name='tel' value><br />

				<input type="submit" name="Valider">
				<!--input type="reset" name="reset"-->
			</form>
		</div>

	<?php $this->stop('main_content') ?>

