<!DOCTYPE html>
<html lang="fr">
	<head>

		<meta http‐equiv="content‐type" content="text/html; charset=UTF‐8">
		<meta charset="utf‐8">
		<meta name="viewport" content="width=device‐width, initial‐scale=1, shrink‐to‐fit=no">
		<meta name="description" content="CovoiturageEcoloCar"> 
		<meta name="author" content="ASWeb">

		<title>index.php</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="./../css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="./../css/style.css" type="text/css">

	</head>
			
	<body>
		<!-- Barre de navigation avec logo -->   
		<?php

			require_once('fonctions/navbar.php');

		?>
		<!-- Fin barre de navigation avec logo -->

		<!-- Jumbotrom Recherche rapide -->
		<div id="recherche-rapide" class="jumbotron">
			<h1>Ecolo'Car : le covoiturage en voiture électrique ! </h1>
			<p><a id="form-rapide" href="form-rapide.php">> Trouvez rapidement votre trajet <</a></p>
		</div> 
		<!-- Fin Jumbotron recherche rapide -->


		<!-- Chargement JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="./../js/bootstrap.bundle.min.js"></script>
		<script src="./../js/bootstrap.min.js"></script>
	</body>
</html>