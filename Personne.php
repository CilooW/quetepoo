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

    public function personne(){
        echo "prénom: "                  .$this->prenom.
            "<br> nom: "                 .$this->nom.
            "<br> adresse: "             .$this->adresse.
            "<br> Date de naissance: "   .$this->naissance.
            "<br>";

    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }


    public function setNaissance($naissance)
    {
        $this->naissance = $naissance;

    }

    public function age($naissance) {


        $age = strtotime("now")-strtotime ($naissance);

        echo strtotime($age);

    }


}