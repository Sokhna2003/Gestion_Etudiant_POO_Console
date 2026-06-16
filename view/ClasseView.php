<?php
require_once "entite/Classe.php";

class ClasseView{
    public static function saisirClasse(){
        $id = readline("Entrez l'id de la classe :");
        $libelle = readline("Entrez le libelle de la classe :");

        $classe = new Classe();
        $classe->setId($id);
        $classe->setLibelle($libelle);

        return $classe;
    }
    public static function afficher(Classe $classe){
        return "ID : " . $classe->getId() . "\n" .
            "Nom : " . $classe->getLibelle() . "\n" ;
    }

    public static function listerClasses($listeClasse) {
        if (empty($listeClasse)) {
            echo " Aucun classe ajouter pour le moment\n";
            return;
        }
        echo "--- Liste de tous les classes ---\n";
        foreach ($listeClasse as $classe) {
            echo self::afficher($classe);
            echo "==================\n";
        }
    }

}

?>