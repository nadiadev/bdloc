<?php
	
	$w_routes = array(
		['GET', '/temps/', 'Default#home', 'home'],
		['GET|POST','/temps/abonnement/','User#register','abonnement'],
		['GET|POST','/temps/connexion/','User#login','connexion'],
		['GET|POST','/temps/catalogue/','Books#filtre','catalogue'],
		['GET', '/temps/details/', 'Books#find', 'details'],
		['GET','/modale/details/', 'Books#modale', 'modale'],
<<<<<<< HEAD
		['GET|POST','/temps/panier/','Panier#showPanier','panier'],
		
	

		['GET|POST','/temps/validate/','Panier#validate','ajout-panier'],
=======
		['GET|POST','/temps/panier/','Panier#filtre','panier'],
<<<<<<< HEAD
		['GET|POST','/temps/maps/','Maps#geol','maps'],
=======
		['GET|POST','/temps/confirmation/','Panier#confValidate','confirmation'],
>>>>>>> origin/master
>>>>>>> origin/master
		
	);