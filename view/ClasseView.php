<?php
require_once "entite/classe.php";

function saisirClasse(){
    $id = readline("Entrez l'id de la classe :");
    $libelle = readline("Entrez le libelle de la classe :");

    $classe = new Classe();
    $classe->setId($id);
    $classe->setLibelle($libelle);

    return $classe;
}

function listerClasses($listeClasse) {
    if (empty($listeClasse)) {
        echo " Aucun classe ajouter pour le moment\n";
        return;
    }
    echo "--- Liste de tous les classes ---\n";
    foreach ($listeClasse as $classe) {
        echo $classe->afficher();
        echo "==================\n";
    }
}


?>