<?php

class Trajet
{
    private $dateHeureTrajet;
    private $villeDepart;
    private $villeArrivee;
    private $nbPlaces;
    private $prixUnitPlace;

    
    // Constructeur
    public function __construct(string $dateHeureTrajet, string $nvilleDepartom, string $villeArrivee, string $nbPlaces, string $prixUnitPlace)
    {
        $this -> dateHeureTrajet = $dateHeureTrajet;
        $this -> villeDepart = $villeDepart;
        $this -> villeArrivee = $villeArrivee;
        $this -> nbPlaces = $nbPlaces;
        $this -> prixUnitPlace = $prixUnitPlace;
    }















}



?>