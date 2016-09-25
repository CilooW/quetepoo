<?php

class Personne {

    //création des attributs

    public $nom;
    public $prenom;
    public $adresse;
    public $naissance;

    //méthodes

    public function __construct($prenom)
    {
        $this->prenom=$prenom;
    }




    public function personne(){ //je récupère les infos de l'objet instancié de la class personne en cours et j'affiche ses infos
        echo "prénom: "                  .$this->prenom.
            "<br> nom: "                 .$this->nom.
            "<br> adresse: "             .$this->adresse.
            "<br> Date de naissance: "   .$this->naissance.
            "<br>";

    }

    public function setAdresse($adresse) // je permets de modifier l'adresse en la rentrant en tant que string paramètre
    {
        $this->adresse = $adresse;
    }


    public function setNaissance($naissance) // je permets de modifier la date de naissance en la rentrant en tant que string paramètre
    {
        $this->naissance = $naissance;

    }

    public function age() {

       $age = date('Ym',strtotime ("now")) - date('Ym',strtotime ($this->naissance));



        echo substr($age,0 , 2);
    }


}