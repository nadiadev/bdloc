<!DOCTYPE html>
<html lang="fr">
<head>

	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
	<link rel="stylesheet" href="<?=$this->assetUrl('css/style.css') ?>">
	<link rel="stylesheet" href="<?=$this->assetUrl('css/gpstyle.css') ?>">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

	<!--style type="text/css">
        html, body { height: 100%; margin: 0; padding: 0; }
        #map { height: 100%; }
    </style-->

</head>
<body>
	<div class="container">
		<header>
			<h1><?= $this->e($title) ?></h1>

		</header>

		<section>
			<div class="div">
				
			<?= $this->section('main_content') ?>
			</div>
		</section>

		<footer>
		</footer>
	</div>
</body>
</html>