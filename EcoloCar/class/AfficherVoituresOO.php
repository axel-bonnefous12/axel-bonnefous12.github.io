<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>AfficherVoituresOO.php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

    <?php
       
        require_once('Voiture.php');

        $voiture1 = new Voiture('ABC-12-EF', 'Audi', 'A6', 'Jaune');
        $voiture2 = new Voiture('GHI-34-JK', 'Volkswagen', 'Amarok', 'Bleu');
        $voiture3 = new Voiture('LMN-56-OP', 'Fiat', 'Dino', 'Noire');

        echo print_r($voiture1)."<br><br>";
        echo print_r($voiture2)."<br><br>";
        echo print_r($voiture3)."<br><br>";

        $lesVoitures = array(); // Array vide $lesVoitures 

        array_push($lesVoitures, $voiture1, $voiture2, $voiture3); // On remplie l'array de voiture

        var_dump($lesVoitures);

        echo "<br><br>";
        ?>

        <table id="lesVoitures" >
            <tr>
                <th>Immatriculation</th>
                <th>Marque</th>
                <th>Modele</th>
                <th>Couleur</th>
            </tr>

        <?php
        foreach($lesVoitures as $value)
        { 
        ?>  <tr>
            <td><?php echo $value->getImmatriculation();?></td>
            <td><?php echo $value->getMarque();?></td>
            <td><?php echo $value->getModele();?></td>
            <td><?php echo $value->getCouleur();?></td>
            <tr>
        <?php
        }
        ?>

        </table>
        
    
        <!-- array(3) 
        { 
            [0]=> object(Voiture)#1 (4) 
            { 
                ["immatriculation":"Voiture":private]=> string(9) "ABC-12-EF" 
                ["marque":"Voiture":private]=> string(4) "Audi" 
                ["modele":"Voiture":private]=> string(2) "A6" 
                ["couleur":"Voiture":private]=> string(5) "Jaune" 
            } 
            [1]=> object(Voiture)#2 (4) 
            { 
                ["immatriculation":"Voiture":private]=> string(9) "GHI-34-JK" 
                ["marque":"Voiture":private]=> string(10) "Volkswagen" 
                ["modele":"Voiture":private]=> string(6) "Amarok" 
                ["couleur":"Voiture":private]=> string(4) "Bleu"
            } 
            [2]=> object(Voiture)#3 (4) 
            { 
                ["immatriculation":"Voiture":private]=> string(9) "LMN-56-OP" 
                ["marque":"Voiture":private]=> string(4) "Fiat" 
                ["modele":"Voiture":private]=> string(4) "Dino" 
                ["couleur":"Voiture":private]=> string(5) "Noire" 
            } 
        } -->


    </body>
</html>