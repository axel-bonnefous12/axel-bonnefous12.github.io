<?php

class User
{
    private $login;
    private $password;
    private $nom;
    private $prenom;
    private $email;
    private $telMobile;
    
    // Constructeur
    public function __construct(string $login, string $password, string $nom, string $prenom, string $email, string $telMobile)
    {
        $this -> login = $login;
        $this -> password = $password;
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> email = $email;
        $this -> telMobile = $telMobile;
    }

    














}



?>