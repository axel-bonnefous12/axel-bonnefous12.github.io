<?php

class Voiture
{
    private $immatriculation;
    private $marque;
    private $modele;
    private $couleur;

    // Constructeur
    public function __construct(string $immatriculation, string $marque, string $modele, string $couleur)
    {
        $this -> immatriculation = $immatriculation;
        $this -> marque = $marque;
        $this -> modele = $modele;
        $this -> couleur = $couleur;
    }

    // Accesseurs Immatriculation
    public function getImmatriculation(): string
    {
        return $this -> immatriculation;
    }
    public function setImmatriculation(string $immatriculation)
    {
        $this -> immatriculation = $immatriculation;
    }
    
    // Accsesseurs Marque
    public function getMarque(): string
    {
        return $this -> marque;
    }
    public function setMarque(string $marque)
    {
        $this -> marque = $marque;
    }

    // Accesseurs Modele
    public function getModele(): string
    {
        return $this -> modele;
    }
    public function setModele(string $modele)
    {
        if(strlen($modele) == 9)
        {
            $this -> modele = $modele;
        }
    }

    // Accesseurs Couleur
    public function getCouleur(): string
    {
        return $this -> couleur;
    }
    public function setCouleur(string $couleur)
    {
        $this -> couleur = $couleur;
    }
    
    public function Afficher(): string
    {
        return 'Immatriculation : '.$this.$immatriculation.'; Marque : '.$marque.'; Modèle : '.$modele.'; Couleur : '.$couleur;
    }



}


?>