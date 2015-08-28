<?php
namespace Controller;

use \W\Controller\Controller;
use \Manager\UserManager;
use \W\security\authentificationManager;

class UserController extends Controller
{

		// public function logout()
		// {
		// 	$am = new authentificationManager();
		// 	$am->logUserOut();
		// 	$this->redirectionToRoute('admin');
		// }

	public function login()
	{
		$am = new authentificationManager();
		$error="";
		$username="";
		 	//$date = [];

		 	// traitement du formulaire
		if(!empty($_POST)){
			$username = $_POST['username'];
			$password = $_POST['password'];

			$result = $am->isValidLoginInfo($username, $password);

			// si valide : connexion
			if($result > 0){
				$userId = $result;

					// récuper l'utilisateur
				$UserManager = new \Manager\UserManager();
				$user = $UserManager->find($userId);

					// connexion l'user
				$am->loginUserIn($user);

					// redirection

					// $this->redirectionToRoute('show_all_terms');

			}else{
				$error = "Mauvais identifiants !";
			}
		}

		// 	$date['error'] = $error;
		// 	$data['username'] = $username;
		$this->show('temps/connexion');
	}

	public function register()
	{
			// $this->allowTo('admin');
		$user = $this->getUser();


		$UserManager = new UserManager();
		$error = [];
		$username = "";
		$email = "";
		$password = "";
		$password_confirm = "";
		$hashedPassword	= "";
		$nom = "";
		$prenom = "";
		$code_postal = "";
		$adress = "";
		$tel = "";
		$code_postalRegexp = "/^[0-9]{5}$/";
		$telRegexp = "/^[0-9]{10}$/";


			// formulaire d'inscription -------------------------------------
			// if(!empty($_POST)){
			// 	foreach ($$_POST as $k => $v) {
			// 		// crée une variable $username, $email, $password, etc...
			// 		$$k = trim(strip_tags($v));
			// } ------------------------------------------------------------

		if(!empty($_POST)){
			$username 			=trim(strip_tags($_POST['username']));
			$email 				=trim(strip_tags($_POST['email']));
			$password 			=trim(strip_tags($_POST['password']));
			$password_confirm 	=trim(strip_tags($_POST['password_confirm']));
			$nom 				=trim(strip_tags($_POST['nom']));
			$prenom 			=trim(strip_tags($_POST['prenom']));
			$adress 			=trim(strip_tags($_POST['adress']));
			$code_postal 		=trim(strip_tags($_POST['code_postal']));
			$tel 				=trim(strip_tags($_POST['tel']));

			/* validation */
			if(empty($username)){
				$error['username'] = "Veuillez saisir votre username !";

			}
					// username assez long
			if(strlen($username) < 4){
				$error['username'] = "pseudo trop court !";

			}/*else{
				$sql = "SELECT username FROM users WHERE username = :username";
				$sth = $dbh->prepare($sql);
				$sth -> execute(array(":username"=> $username));
				$foundUsername = $sth->fetchColumn();
				if ($foundUsername){
					$error= "ce username existe déjà";
				}
			}*/

					// email
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$error['email'] = "email non valide !";
			}
			elseif(strlen($email)> 250){
				$error['email'] = "email trop long non valide !";
			}					

					// mot de passe correspondent
			if($password != $password_confirm){
				$error['password'] = "Les mots de passe ne correspondent pas !";
			}elseif(strlen($password) < 6){
				$error['password'] = "veuillez saisir un mot de passe d'au moins 7 caracteres !";
			}						
		
		if(empty($nom)){
			$error['nom'] = "Veuillez saisir votre nom !";
			}
			if(empty($prenom)){
				$error['prenom'] = "Veuillez saisir votre prenom !";
			}
			if(empty($adress)){
				$error['adress'] = "Veuillez saisir votre adress !";
			}
			if(empty($code_postal)){
				$error['code_postal'] = "Veuillez saisir votre code postal!";
			}elseif(!preg_match($code_postalRegexp, $code_postal)){
				$error['code_postal'] = "votre code postal doit correspondre à 5 chiffres";
			}
			if(empty($tel)){
				$error['tel'] = "Veuillez saisir votre tel!";
			}elseif(!preg_match($telRegexp, $tel)){
			$error['tel'] = "votre numero de tel doit correspondre à 10 chiffres";
		}

		/* fin de la validation */

		// si valide...
		if(empty($error)){

			//}
			// hacher le mot de passe 
			$hashedPassword  = password_hash($password, PASSWORD_DEFAULT);

			$newUser = [
			"username" 		=> $username,
			"email" 		=> $email,
			"password" 		=> $hashedPassword,
			"nom" 			=> $nom,
			"prenom" 		=> $prenom,
			"code_postal" 	=> $code_postal,
			"adress" 		=> $adress,
			"tel" 			=> $tel,
										// "role" 			=> "admin",
			"date_created"	=> date("Y-m-d H:i:s"),
			"date_modified" 	=> date("Y-m-d H:i:s"),
			];
					// debug($_POST);
					// die();
					//inseérrer en base
			$UserManager->insert($newUser);
		}

					//afficher bravo ou rediriger ou faire quelque 

					//si invalide..
				   //envoyer les erreurs et les données soumises à la vue 
		}
		$dataToPassToTheView = [
		"username" 		=> $username,
		"email" 		=> $email,
		"password" 		=> $password,
		"nom" 			=> $nom,
		"prenom" 		=> $prenom,
		"code_postal" 	=> $code_postal,
		"adress" 		=> $adress,
		"tel" 			=> $tel,
		"errors" 		=> $error,
		];	
		$this->show('temps/abonnement', $dataToPassToTheView);
				// $this->RedirectToRoute('abonnement');
	}


}