<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>voiture-form-saisie.php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        

    </head>
    <body>

 
                <form method="get" action="creerVoiture.php">
                    <fieldset>
                        <legend>Informations à compléter</legend>
                            <p>
                                <label for="immatricule_id">Immatriculation</label>
                                <input type="text" placeholder="Ex : ABC-12-DE" name="immatriculation" id="immat_id" required/>
                            </p>
                            <p>
                                <label for="marque_id">Marque</label>
                                <input type="text" name="marque" id="marque_id" required/>
                            </p>
                            <p>
                                <label for="modele_id">Modele</label>
                                <input type="text" name="modele" id="modele_id" required/>
                            </p>
                            <label for="couleur_id" class="col-form-label col-4">Couleur</label>
                                <select class="form-control" id="couleur_id" name="couleur" style="width:200px;">
                                    <option value="" selected="selected" disabled="disabled">Sélectionnez une couleur</option>
                                    <option>Jaune</option>
                                    <option>Orange</option>
                                    <option>Rouge</option>
                                    <option>Rose</option>
                                    <option>Violet</option>
                                    <option>Bleu</option>
                                    <option>Vert</option>
                                    <option>Marron</option>
                                    <option>Gris</option>
                                    <option>Blanc</option>
                                    <option>Noir</option>

                                </select>
                            <p>
                                <input type="submit" name="submit" value="Envoyer"/>
                            </p>            

                    </fieldset>
                </form>
            
   
        




    </body>
</html>