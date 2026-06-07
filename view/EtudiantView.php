<?php
require_once "entite/Etudiant.php";
require_once "service/ClasseService.php";

function saisirEtudiant($listeClasse){
    $id = readline("Entrez l'ID de l'etudiant :");
    $nom = readline("Entrez le nom de l'etudiant :");
    $prenom = readline("Entrez le prenom de l'etudiant :");
    $email = readline("Entrez l'email de l'etudiant :");
    $telephone = readline("Entrez le telephone de l'etudiant :");
    $matricule = readline("Entrez la matricule de l'etudiant :");
    $adresse = readline("Entrez l'adresse de l'etudiant :");
    $idclasse = readline("Entrez l'id de la classe de l'etudiant :");

    $classeTrouvee = getClasseById($listeClasse, $idclasse);
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

function listerEtudiants($listeEtudiant) {
    if (empty($listeEtudiant)) {
        echo " Aucun étudiant inscrit pour le moment\n";
        return;
    }
    echo "--- Liste de tous les étudiants ---\n";
    foreach ($listeEtudiant as $etudiant) {
        echo $etudiant->afficher();
        echo "==================\n";
    }
}




?>