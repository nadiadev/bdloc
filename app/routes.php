<?php
	
	$w_routes = array(
		['GET', '/temps/', 'Default#home', 'home'],
		['GET|POST','/temps/abonnement/','User#register','abonnement'],
		['GET|POST','/temps/connexion/','User#login','connexion'],
		['GET|POST','/temps/catalogue/','Books#filtre','catalogue'],
		['GET', '/temps/details/', 'Books#find', 'details'],
		['GET','/modale/details/', 'Books#modale', 'modale'],

	);