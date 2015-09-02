<?php $this->layout('layout', ['title' => 'Nouvel abonnement']) ?>
	
	<?php $this->start('main_content') ?>
	<!--link rel="stylesheet" type="text/css" href="<= $this->assetUrl('css/style.css')"-->
	<style>
	.abonnement{
		
	}
	.forme{
		margin-left: 10%;
	}
	</style>
		<h2>Inscription</h2>

		<p> Veuillez renseigner les champs suivants </p></br>
		<div class="forme">	
			<form method="POST" novalidate action="">
				<label>Username</label>
				<div class="abonnement"><input type="text" id='username' name='username'  ><?php if (!empty($errors['username'])){echo $errors['username'];}?></div><br />

				<label>Email</label>
				<div class="abonnement"><input type="email" id='email' name='email' required><?php if (!empty($errors['email'])){echo $errors['email'];}?></div><br />

				<label>Mot de passe </label>
				<div class="abonnement"><input type="password" id='password' name='password' required ><?php if (!empty($errors['password'])){echo $errors['password'];}?></div><br/>

				<label>Confirm mot de passe </label>
				<div class="abonnement"><input type="password" id='password_confirm' name='password_confirm' required ><br /><br />

				<label>Nom</label>
				<div class="abonnement"><input type="text" id='nom' name='nom' required ><?php if (!empty($errors['nom'])){echo $errors['nom'];}?></div><br />

				<label>Prenom</label>
				<div class="abonnement"><input type="text" id='prenom' name='prenom' required ><?php if (!empty($errors['prenom'])){echo $errors['prenom'];}?></div><br />

				<label>Code_Postal</label>
				<div class="abonnement"><input type="text" id='code_postal' name='code_postal' required ><?php if (!empty($errors['code_postal'])){echo $errors['code_postal'];}?></div><br />

				<label>Adress</label>
				<div class="abonnement"><input type="text" id='adress' name='adress' required ><?php if (!empty($errors['adress'])){echo $errors['adress'];}?></div><br />

				<label>Tel</label>
				<div class="abonnement"><input type="text" id='tel' name='tel' required ><?php if (!empty($errors['tel'])){echo $errors['tel'];}?></div><br />

				<div class="abonnement"><input type="submit" name="Valider">
				<!--input type="reset" name="reset"-->
				<div class="identification">
				<a href="<?= $this->url('connexion'); ?>" title="connexion">Connexion !</a>
			
			</form>
			
		</div>
		
	<?php $this->stop('main_content') ?>

