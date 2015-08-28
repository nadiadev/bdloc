<?php $this->layout('layout', ['title' => ' Catalogue BDLOC']) ?>

<?php $this->start('main_content') ?>



<style>
nav{
	
	margin-bottom: 5px;
	width: 100%;

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
	width:20%;
	border:solid 1px;
	margin-left: 10px;
	padding: 10px;
	float:left;
}
.box{
	width:75%;
	float : left;
	

}
/*.box img,p{
	width:45%;
	border:solid 1px;
	float:left;
	margin:5px;
}*/
.image{
	width:45%;

	
	float:left;
	margin:5px;
}
img{
	max-width: 100%;
}
/*p{
width:23%;
	border:solid 1px;
	float:left;
	margin:5px;	
}*/
.text{
	width:45%;
	
	float:left;
	margin:5px;
}
.affiche{
	width: 45%;
	height: 300px;
	
	
	float:left;
	
}
.bonjour{
	width:10%;
	float:right;
}

</style>


<nav>
<ul>
	<li><h4>Bdloc</h4></li>
	<li><a href="" >Les bd</a></li>
	<li><a href="" >Mon panier</a></li>
	<li><a href="" >Mon compte</a></li>
	
</ul>
<div class="bonjour">
	Bonjour<br />
	<br />
	<a href="">deconnexion</a>
</div>

</nav>

<hr />
	
<div class="filtres">
	<h5>Catégories</h5><br />
 <form action="">
 	<input type="checkbox" name="disponible" value="disponible"> Polar<br>
 	<input type="checkbox" name="disponible" value="disponible"> Historique<br>
 	<input type="checkbox" name="disponible" value="disponible"> Tranche de vie<br>
 	<input type="checkbox" name="disponible" value="disponible"> Aventure<br>
 	<input type="checkbox" name="disponible" value="disponible"> Jeunesse<br>
 	<input type="checkbox" name="disponible" value="disponible"> Fantastique<br>
 <br />
 <h5>Disponibilité</h5><br />
  <input type="checkbox" name="disponible" value="disponible"> disponible<br>
  <input type="checkbox" name="indisponible" value="indisponible" checked>indisponible<br>
  <input type="submit" value="Valider">
</form>
<br />

<!--<div class="inner-box">-->


<!-- </div> -->
			<form method="GET" action="">
				<label>Recherche</label><br />
				<input type="text" name="recherche">
				
					
				
				<input type="submit" value="OK" />
			</form>

			
	<!--affichage de la page catalogue par default -->
	<!-- </div>
	<div class="box">
	<?php// foreach($books as $book){ ?>
	<div class="affiche">
	<div class="image"><img src="<?php //echo $this->assetUrl('thumbnails_cover/'.$book['cover']) ?>" /></div>
	<div class="text"><br /><br /><p><?php// echo "Titre : ".$book['title']."<br /> Illustrateur : ".$book['illuLastName']."<br />Scenariste : ".$book['scenaLastName']."<br />Coloriste : ".$book['colorLastName'] ?></p></div>
	</div>
	<?php
	//}
	?>
	</div> -->
	<!--affichage du resultat du filtre recherche  -->
	</div>
	<div class="box">
	<?php foreach($books as $book){ ?>
	<div class="affiche">
	<div class="image"><img src="<?php echo $this->assetUrl('thumbnails_cover/'.$book['cover']) ?>" /></div>
	<div class="text"><br /><br /><p><?php echo "Titre : ".$book['title']."<br /> Illustrateur : ".$book['illuLastName']."<br />Scenariste : ".$book['scenaLastName']."<br />Coloriste : ".$book['colorLastName'] ?></p></div>
	</div>
	<?php
	}
	?>
	</div>

<!-- <div class="box"><?php//foreach ( $books as $book){
//echo '<div class="affiche"><img src="'.$this->assetUrl('thumbnails_cover/'.$book['cover']).'">'.$book['title']."</div>";
//}
?> -->

	

<?php $this->stop('main_content') ?>
