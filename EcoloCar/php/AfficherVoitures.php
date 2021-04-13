<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>AfficherVoitures.php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <?php

        $voitures = array(
            array(
                'immatriculation' => 'AA-111-AA',
                'marque' => 'Audi',
                'modele' => 'A6',
                'couleur' => 'Bleu'
            ),
            array(
                'immatriculation' => 'BB-222-BB',
                'marque' => 'Volkswagen',
                'modele' => 'Amarok',
                'couleur' => 'Vert'
            ),
            array(
                'immatriculation' => 'CC-333-CC',
                'marque' => 'Fiat',
                'modele' => 'Dino',
                'couleur' => 'Noir'
            )
        );
            //var_dump($voitures);
        
        if(!empty($voitures))
        {
            $affichage = '<h1>Liste des voitures</h1>';
            $affichage .= '<ul>';
            for($i = 0; $i < count($voitures); $i++)
            {
                $affichage .= '<li>' . $voitures[$i]['immatriculation'] . ' ' . $voitures[$i]['marque'] . ' ' . $voitures[$i]['modele'] . ' ' . $voitures[$i]['couleur'] . '</li>';
            }
            $affichage .= '</ul>';
    
            echo "<p>$affichage</p>";
        } 
        else 
        {
            echo "<p>Il n\'y a pas d\'éléments dans la tableau $voitures</p>";
        }
        /* -------------------------------------------------------------------------------- */
        
        $lesVoitures_2 = array(
            1 => array(
                'immatriculation' => 'AA-111-AA',
                'marque' => 'Audi',
                'modele' => 'A6',
                'couleur' => 'Bleu'
            ),
            2 => array(
                'immatriculation' => 'BB-222-BB',
                'marque' => 'Volkswagen',
                'modele' => 'Amarok',
                'couleur' => 'Vert'
            ),
            3 => array(
                'immatriculation' => 'CC-333-CC',
                'marque' => 'Fiat',
                'modele' => 'Dino',
                'couleur' => 'Noir'
            )
        );

        
        echo "<br>";

       
          
        if(!empty($lesVoitures_2))
        {
            echo '<h1>Liste des voitures</h1>';
            echo '<table>';

            for($i = 1; $i <= count($lesVoitures_2); $i++)
            {
                // thead
                echo '<thead><tr>';
                echo '<th>'.'Voiture '.$i.'</th></tr><thead>';

                // tbody
                echo '<tbody><tr><td>'.$lesVoitures_2[$i]['immatriculation'].'</td>'.'<td>'.$lesVoitures_2[$i]['marque'].'</td>'.'<td>'.$lesVoitures_2[$i]['modele'].'</td>'.'<td>'.$lesVoitures_2[$i]['couleur'].'</td>';
                echo '</tr></tbody>';
            }

            echo '</table>';
        } 
        else 
        {
            echo "Il n\'y a pas d\'éléments dans le tableau $lesVoitures_2";
        }
        
        ?>


        
    </body>
</html>

