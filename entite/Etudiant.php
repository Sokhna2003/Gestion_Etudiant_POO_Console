<?php

class Etudiant {
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $matricule;
    private $adresse;
    private $classe;

    public function getId(){
        return $this->id;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getTelephone(){
        return $this->telephone;
    }
    public function getMatricule(){
        return $this->matricule;
    }
    public function getAdresse(){
        return $this->adresse;
    }
    public function getClasse(){
        return $this->classe;
    }

    public function setId($id) { 
        $this->id = $id; 
    }
    public function setNom($nom) { 
        $this->nom = $nom; 
    }
    public function setPrenom($prenom) { 
        $this->prenom = $prenom; 
    }
    public function setEmail($email) { 
        $this->email = $email; 
    }
    public function setTelephone($telephone) { 
        $this->telephone = $telephone; 
    }
    public function setMatricule($matricule) { 
        $this->matricule = $matricule; 
    }
    public function setAdresse($adresse) { 
        $this->adresse = $adresse; 
    }
    public function setClasse(Classe $classe) { 
        $this->classe = $classe; 
    }


}

?>