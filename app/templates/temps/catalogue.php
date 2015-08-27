<?php $this->layout('layout', ['title' => ' Catalogue BDLOC']) ?>

<?php $this->start('main_content') ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	
	<!--<title>BDLOC</title>-->
</head>
<style>
nav{
	border:solid 1px;
	margin-bottom: 5px;
	width: 800px;
	
}
a{
text-decoration: none;
border: solid 1px;
padding-left:15px;	
padding-right:15px;	
box-shadow: 5px 5px 2px #ccc;
border-radius: 3px;
}
a:hover{
	color: gray;
}
ul,li{
	display:inline-block;
	margin:10px;

}
h4{
	font-size: 30px;
	margin-right: 30px;
}
.filtres{
	width:200px;
	border:solid 1px;
	margin-left: 10px;
	padding: 10px;
}
</style>
<body>

<nav>
<ul>
	<li><h4>Bdloc</h4></li>
	<li><a href="" >Les bd</a></li>
	<li><a href="" >Mon panier</a></li>
	<li><a href="" >Mon compte</a></li>
	
</ul>
</nav>
<hr></hr>
	
<div class="filtres">
	<h5>Catégories</h5></br>
 <form action="">
 	<input type="checkbox" name="disponible" value="disponible"> Polar<br>
 	<input type="checkbox" name="disponible" value="disponible"> Historique<br>
 	<input type="checkbox" name="disponible" value="disponible"> Tranche de vie<br>
 	<input type="checkbox" name="disponible" value="disponible"> Aventure<br>
 	<input type="checkbox" name="disponible" value="disponible"> Jeunesse<br>
 	<input type="checkbox" name="disponible" value="disponible"> Fantastique<br>
 </br>
 <h5>Disponibilité</h5></br>
  <input type="checkbox" name="disponible" value="disponible"> disponible<br>
  <input type="checkbox" name="indisponible" value="indisponible" checked>indisponible<br>
  <input type="submit" value="Valider">
</form>
</br>

<!--<div class="inner-box">-->


<!-- </div> -->




		
	

			<form method="GET" action="">
				<label>Recherche</label></br>
				<input type="text" name="recherche">
				
					
				
				<input type="submit" value="OK" />
			</form>

			
	</div>






<div class="box"><?php foreach ( $books as $book){
echo $book['title']."</br>";
}
?>

	</div>
</body>
<?php $this->stop('main_content') ?>
</html>