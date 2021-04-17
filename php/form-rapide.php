<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>form-rapide.php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="./../css/style.css" type="text/css">
        
    </head>

    <body class="container-fluid">
		<!-- Barre de navigation avec logo -->   
		<?php

			require_once('fonctions/navbar.php');

		?>
		<!-- Fin barre de navigation avec logo -->    

        <!-- Contenu de la page : formulaire d'inscription -->
        <div id="content" class="row mt-5">
            
            <!-- Formulaire utilisateur -->
            <div id="user-form" class="offset-3 col-6 formulaire">
                <h1 class="text-primary">Faites une recherche !</h1>
                <div class=""row">
                    <form class="col border border-dark rounded" method="POST" action="form-rapide.php">
                        <fieldset>
                            <legend>Coordonnées</legend>

                            <!-- Liste déroulante Ville de départ -->
                            <div class="form-group row">
                                <label for="user-pats" class="col-form-label col-4">Ville de départ</label>
                                <div class="col-4">
                                    <select class="form-control" id="user-pays" name="user-pays" style="width:200px;">
                                        <option value="" selected="selected" disabled="disabled">Sélectionnez une ville</option>
                                        <option>Saint-Affrique</option>
                                        <option>Albi</option>
                                        <option>Montpellier</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Liste déroulante Ville d'arriver -->
                            <div class="form-group row">
                                <label for="user-pats" class="col-form-label col-4">Ville d'arriver</label>
                                <div class="col-4">
                                    <select class="form-control" id="user-pays" name="user-pays" style="width:200px;">
                                        <option value="" selected="selected" disabled="disabled">Sélectionnez une ville</option>
                                        <option>Saint-Affrique</option>
                                        <option>Albi</option>
                                        <option>Montpellier</option>
                                    </select>
                                </div>
                            </div>
                        
                           <!-- Input date de départ -->
                           <div class="form-group row">
                                <label for="user-date-naissance" class="col-form-label col-4">Date de départ</label>
                                <div class="col-4">
                                    <input type="date" class="form-control" name="user-date-naissance" id="user-date-naissance" placeholder="JJ/MM/AAAA" style="width:180px;">
                                </div>
                            </div>
                        
                            <!-- Boutons Rechercher -->
                            <div class="row">
                                <div class="offset-9">
                                    <button type="submit" class="btn btn-primary my-2">Rechercher</button>
                                </div>
                            </div>

                        </fieldset>

                    <!-- Fin du formulaire utilisateur -->       
                    </form>
                </div>
			<!-- fin div user-form -->
            </div>
		<!-- Fin div content = Contenu de la page : formulaire d'inscription -->
        </div>
        
        <!-- Chargement JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
    </body>
</html>

