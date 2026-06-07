<?php
require_once "entite/Classe.php";

function ajouterClasse(&$listeClasse, $classe){
    $listeClasse[] = $classe;
    echo "Classe ajouter avec succes \n";
}

function getClasseById($listeClasse, $id){
    foreach ($listeClasse as $cl) {
        if ($cl->getId() == $id) {
            echo "Classe trouver\n";
            echo $cl->afficher();
            return $cl;
        }
    }
    echo "Aucun classe trouver l'id : " . $id . "\n";
    return null;
}


?>