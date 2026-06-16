<?php
require_once "view/ClasseView.php";
require_once "view/EtudiantView.php";
require_once "service/ClasseService.php";
require_once "service/EtudiantService.php";

$listeClasse = [];
$listeEtudiant = [];

function menu(){
    echo "\n------ MENU ------\n";
    echo "1. Ajouter etudiant\n";
    echo "2. Lister les etudiants\n";
    echo "3. Ajouter une classe\n";
    echo "4. Lister les classes\n";
    echo "5. Lister les etudiants d'une classe\n";
    echo "6. Quitter\n";
    echo "votre choix";
}

do {
    menu();
    $choix = readline("Entrez votre choix : ");
    switch ($choix) {
        case '1':
            $nouveauEtudiant = EtudiantView::saisirEtudiant($listeClasse);
            if ($nouveauEtudiant !== null) {
                EtudiantService::ajouterEtudiant($listeEtudiant, $nouveauEtudiant);
            }
            break;
        case '2':
            EtudiantView::listerEtudiants($listeEtudiant);
            break;
        case '3':
            $nouvelleClasse = ClasseView::saisirClasse();
            ClasseService::ajouterClasse($listeClasse, $nouvelleClasse);
            break;
        case '4':
            ClasseView::listerClasses($listeClasse);
            break;
        case '5':
            $idClasseRechercher = readline("Entrez l'id de la classe a afficher : ");
            $resultat = EtudiantService::getEtudiantsParClasse($listeEtudiant,$idClasseRechercher);
            EtudiantView::listerEtudiantsParClasse($resultat);
            break;
        case '6':
            echo "Au revoir \n";
            break;
        
        default:
            echo "Choix invalide\n";
            break;
    }
} while ($choix != 6);

?>