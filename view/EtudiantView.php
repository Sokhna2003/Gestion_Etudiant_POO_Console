<?php
require_once "entite/Etudiant.php";
require_once "service/ClasseService.php";

class EtudiantView{

    public static function saisirEtudiant($listeClasse){
        $id = readline("Entrez l'ID de l'etudiant :");
        $nom = readline("Entrez le nom de l'etudiant :");
        $prenom = readline("Entrez le prenom de l'etudiant :");
        $email = readline("Entrez l'email de l'etudiant :");
        $telephone = readline("Entrez le telephone de l'etudiant :");
        $matricule = readline("Entrez la matricule de l'etudiant :");
        $adresse = readline("Entrez l'adresse de l'etudiant :");
        $idclasse = readline("Entrez l'id de la classe de l'etudiant :");

        $classeTrouvee = ClasseService::getClasseById($listeClasse, $idclasse);
        if ($classeTrouvee == null) {
            echo "Impossible de creer l'étudiant car la classe n'existe pas \n";
            return null;
        }
        $etudiant = new Etudiant();
        $etudiant->setId($id);
        $etudiant->setNom($nom);
        $etudiant->setPrenom($prenom);
        $etudiant->setEmail($email);
        $etudiant->setTelephone($telephone);
        $etudiant->setMatricule($matricule);
        $etudiant->setAdresse($adresse);
        $etudiant->setClasse($classeTrouvee);

        return $etudiant;
    }

    public static function afficher(Etudiant $etudiant){
        // recupere le libelle de la classe directement depuis l'objet classe associe
        $nomClasse = $etudiant->getClasse() ? $etudiant->getClasse()->getLibelle() : "Aucune";
        return "ID : " . $etudiant->getId() . "\n" .
            "Nom : " . $etudiant->getNom() . "\n" .
            "Prenom : " . $etudiant->getPrenom() . "\n" .
            "Matricule : " . $etudiant->getMatricule() . "\n" .
            "Email : " . $etudiant->getEmail() . "\n" .
            "Telephone : " . $etudiant->getTelephone() . "\n" .
            "Adresse : " . $etudiant->getAdresse() . "\n" .
            "Classe : " . $nomClasse . "\n" ;
    }
    
    public static function listerEtudiants($listeEtudiant) {
        if (empty($listeEtudiant)) {
            echo " Aucun étudiant inscrit pour le moment\n";
            return;
        }
        echo "--- Liste de tous les étudiants ---\n";
        foreach ($listeEtudiant as $etudiant) {
            echo self::afficher($etudiant);
            echo "==================\n";
        }
    }

    public static function listerEtudiantsParClasse($listeEtudiantsFiltres) {
        if (empty($listeEtudiantsFiltres)) {
            echo "Aucun étudiant trouvé dans cette classe\n";
            return;
        }
        echo "--- Liste des étudiants de la classe ---\n";
        foreach ($listeEtudiantsFiltres as $etudiant) {
            echo self::afficher($etudiant);
            echo "-----------------\n";
        }
    }

}

?>