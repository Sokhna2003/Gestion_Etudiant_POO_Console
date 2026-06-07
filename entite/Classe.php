<?php

class Classe {
    private $id;
    private $libelle;

    public function getId(){
        return $this->id;
    }

    public function getlibelle(){
        return $this->libelle;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setLibelle($libelle){
        $this->libelle = $libelle;
    }

    public function afficher(){
        return "ID : " . $this->id . "\n" .
            "Nom : " . $this->libelle . "\n" ;
    }

    // public function saisirClasse(){
    //     $this->id = readline("Entrez l'ID :");
    //     $this->libelle = readline("Entrez le libelle :");
    // }
}

?>