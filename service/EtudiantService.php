<?php
require_once "entite/Etudiant.php";

function ajouterEtudiant(&$listeEtudiant, $etudiant){
    $listeEtudiant[] = $etudiant;
    echo "Etudiant ajouter avec succes \n";
}

function listerEtudiantsParClasse($listeEtudiant, $idClasse) {
    $trouve = false;
    foreach ($listeEtudiant as $etudiant) {
        // On vérifie si l'étudiant a une classe et si son ID correspond
        if ($etudiant->getClasse() !== null && $etudiant->getClasse()->getId() == $idClasse) {
            echo $etudiant->afficher();
            echo "-----------------\n";
            $trouve = true;
        }
    }
    if (!$trouve) {
        echo "Aucun étudiant trouvé dans cette classe\n";
    }
}

?>