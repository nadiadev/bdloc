<?php
	
	$w_routes = array(
		['GET', '/temps/', 'Default#home', 'home'],
		['GET|POST','/temps/abonnement/','User#register','abonnement'],
		['GET','/temps/connexion/','User#login','connexion'],
		['GET|POST','/temps/catalogue/','Books#filtre','catalogue'],

	);