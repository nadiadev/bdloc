<?php $this->layout('layout', ['title' => 'Nouvel abonnement']) ?>
	
	<?php $this->start('main_content') ?>
	<!--link rel="stylesheet" type="text/css" href="<= $this->assetUrl('css/style.css')"-->
		<h2>Inscription</h2>

		<p> Veuillez renseigner les champs suivants </p>
		<div class="forme">	
			<form method="POST" novalidate action="">
				<label>Username</label>
				<input type="text" id='username' name='username'  ><div><?php if (!empty($errors['username'])){echo $errors['username'];}?></div><br />

				<label>Email</label>
				<input type="email" id='email' name='email' required><div><?php if (!empty($errors['email'])){echo $errors['email'];}?></div><br />

				<label>Mot de passe </label>
				<input type="password" id='password' name='password' required ><div><?php if (!empty($errors['password'])){echo $errors['password'];}?></div><br/>

				<label>Confirm mot de passe </label>
				<input type="password" id='password_confirm' name='password_confirm' required ><br /><br />

				<label>Nom</label>
				<input type="text" id='nom' name='nom' required ><div><?php if (!empty($errors['nom'])){echo $errors['nom'];}?></div><br />

				<label>Prenom</label>
				<input type="text" id='prenom' name='prenom' required ><div><?php if (!empty($errors['prenom'])){echo $errors['prenom'];}?></div><br />

				<label>Code_Postal</label>
				<input type="text" id='code_postal' name='code_postal' required ><div><?php if (!empty($errors['code_postal'])){echo $errors['code_postal'];}?></div><br />

				<label>Adress</label>
				<input type="text" id='adress' name='adress' required ><div><?php if (!empty($errors['adress'])){echo $errors['adress'];}?></div><br />

				<label>Tel</label>
				<input type="text" id='tel' name='tel' required ><div><?php if (!empty($errors['tel'])){echo $errors['tel'];}?></div><br />

				<input type="submit" name="Valider">
				<!--input type="reset" name="reset"-->
				<div class="identification">
				<a href="<?= $this->url('connexion'); ?>" title="connexion">Connexion !</a>
			
			</form>
			
		</div>
		
	<?php $this->stop('main_content') ?>

