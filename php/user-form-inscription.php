<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>user-form-inscription.php</title>
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
                <h1 class="text-primary">Compte utilisateur</h1>
                <div class=""row">
                    <form class="col border border-dark rounded" method="POST" action="user-form-inscription-traitement.php">
                        <fieldset>
                            <legend>Coordonnées</legend>

                            <!-- Civilité radio boutons -->
                            <div class="form-group row">
                                <label class="col-4">Civilité</label>
                                <div class="form-check form-check-inline pl-4">
                                    <input type="radio" class="form-check-input" name="user-civilite" value="M." />
                                    <label for="user-civilite-m" class="form-check-label">M.</label>
                                </div>
                                <div class="form-check form-check-inline pl-4">
                                    <input type="radio" class="form-check-input" name="user-civilite" value="Mme" />
                                    <label for="user-civilite-mme" class="form-check-label">Mme</label>
                                </div>
                                <div class="form-check form-check-inline pl-4">
                                    <input type="radio" class="form-check-input" name="user-civilite" value="Melle" />
                                    <label for="user-civilite-melle" class="form-check-label">Melle</label>
                                </div> 
                            </div>

                            <!-- Input Nom -->
                            <div class="form-group row">
                                <label for="user-nom" class="col-form-label col-4">Nom</label>
                                <div class="col-6">
                                    <input type="text" class="form-control" name="user-nom" id="user-nom" placeholder="Saisissez votre nom">
                                </div>
                            </div>

                            <!-- Input Prénom -->
                            <div class="form-group row">
                                <label for="user-prenom" class="col-form-label col-4">Prénom</label>
                                <div class="col-6">
                                    <input type="text" class="form-control" name="user-prenom" id="user-prenom" placeholder="Saisissez votre prénom">
                                </div>
                            </div>
                            
                            <!-- Input date de naissance -->
                            <div class="form-group row">
                                <label for="user-date-naissance" class="col-form-label col-4">Date de naissance</label>
                                <div class="col-4">
                                    <input type="date" class="form-control" name="user-date-naissance" id="user-date-naissance" placeholder="JJ/MM/AAAA">
                                </div>
                            </div>
                            
                            <!-- Liste déroulante Pays -->
                            <div class="form-group row">
                                <label for="user-pats" class="col-form-label col-4">Pays</label>
                                <div class="col-4">
                                    <select class="form-control" id="user-pays" name="user-pays">
                                        <option value="" selected="selected" disabled="disabled">Sélectionner un pays</option>
                                        <option>France</option>
                                        <option>Grande-Bretagne</option>
                                        <option>Allemagne</option>
                                    </select>
                                </div>
                            </div>
                        
                            <!-- Cases à cocher des loisirs -->
                            <div class="form-group pl-4">
                                <label class="col-form-label col-4">Loisirs</label>

                                <!-- ligne avec 2 options : sport | cinéma -->
                                <div class="row">
                                    <div class="form-check col-6">
                                        <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="user-sport" id="sport" value="sport">
                                            Sport 
                                        </label>
                                    </div>
                                    <div class="form-check col-6">
                                        <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="user-cinema" id="cinema" value="cinema">
                                            Cinéma 
                                        </label>
                                    </div>
                                </div>

                                <!-- ligne avec 2 options : voyages | informatique -->
                                <div class="row">
                                    <div class="form-check col-6">
                                        <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="user-voyages" id="voyages" value="voyages">
                                            Voyages
                                        </label>
                                    </div>
                                    <div class="form-check col-6">
                                        <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="user-informatique" id="informatique" value="informatique">
                                            Informatique 
                                        </label>
                                    </div>
                                </div>
                            </div>
                        
                        </fieldset>
                
                        <fieldset>
                            <legend>Votre message</legend>
                            <div class="form-group">
                                <label for="user-message">Saisissez votre message</label>
                                <textarea class="form-control" id="user-message" name="user-message" rows="3"></textarea>
                            </div>
                        </fieldset>
                        
                        <!-- Boutons annuler | envoyer -->
                        <div class="row">
                            <div class="offset-9">
                                <button type="reset" class="btn btn-primary my-2">Annuler</button>
                                <button type="submit" class="btn btn-primary my-2">Envoyer</button>
                            </div>
                        </div>
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

