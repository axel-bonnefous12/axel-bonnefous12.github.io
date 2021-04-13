<?php
   // On vérifie si le formulaire est soumis et non vide
    if (isset($_GET['submit']) && !empty($_GET['submit'])) 
    {
        // On récupère les données du formulaire
        $immatriculation = $_GET['immatriculation']; 
        $marque = $_GET['marque']; 
        $modele = $_GET['modele']; 
        $couleur = $_GET['couleur']; 

        // On affiche le résultat
        echo 'Immatriculation : ' . $immatriculation . '<br>';
        echo 'Marque : ' . $marque . '<br>';
        echo 'Modèle : ' . $modele . '<br>';
        echo 'Couleur : ' . $couleur . '<br>';
        
    }
    
    function nettoyerData($data)
    {
        $data = trim($data); // Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
        $data = stripslashes($data); // Supprime tous les antislashs.
        $data = htmlspecialchars($data); // Convertit les caractères spéciaux en entités HTML

        return $data;
    }

?>