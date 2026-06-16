<?php
require_once "entite/Classe.php";

class ClasseService {

    public static function ajouterClasse(&$listeClasse, $classe){
        $listeClasse[] = $classe;
        echo "Classe ajouter avec succes \n";
    }

    public static function getClasseById($listeClasse, $id){
        foreach ($listeClasse as $cl) {
            if ($cl->getId() == $id) {
                return $cl;
            }
        }
        echo "Aucun classe trouver l'id : " . $id . "\n";
        return null;
    }


}

?>