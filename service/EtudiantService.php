<?php
require_once "entite/Etudiant.php";

class EtudiantService{

    public static function ajouterEtudiant(&$listeEtudiant, $etudiant){
        $listeEtudiant[] = $etudiant;
        echo "Etudiant ajouter avec succes \n";
    }

    public static function getEtudiantsParClasse($listeEtudiant, $idClasse) {
        $etudiantsFiltres = [];
        foreach ($listeEtudiant as $etudiant) {
            // On vérifie si l'étudiant a une classe et si son ID correspond
            if ($etudiant->getClasse() !== null && $etudiant->getClasse()->getId() == $idClasse) {
                $etudiantsFiltres [] =$etudiant;
            }
        }
        return $etudiantsFiltres ;
    }

}

?>