<?php
use Noneslad\HTML\html;

$html = new html();
$html->open_panel('Devoir N°1', 'warning');
    $html->open_panel('Consignes', 'success');
        $html->media("Réaliser le template d'un site en PHP",
                "L'objectif de cet exercie était de manipuler PHP"
                . "pour lui faire faire ce pour quoi il à été conçu : gerer et administrer des pages web."
                . "La consigne était la suivante :".$html->get_br(2)
                . $html->get_sp(5)." - Réaliser un site avec un header un aside, un content et un footer.".$html->get_br()
                . $html->get_sp(5)." - Le tout centré sur la page".$html->get_br()
                . $html->get_sp(5)." - Décomposer le code html en fichiers distincts ".$html->get_small('(header, aside, content, footer ...)',array('class'=>'italic')).$html->get_br()
                . $html->get_sp(5)." - Assembler la page web sur un fichier index.php avec php ".$html->get_br()
                . $html->get_sp(5)." - Ajouter du texte et des images : ".$html->get_br()
                . $html->get_sp(10).$html->get_small(" - Header : Votre état civil ").$html->get_br()
                . $html->get_sp(10).$html->get_small(" - Aside : Une liste de vos diplômes ").$html->get_br()
                . $html->get_sp(10).$html->get_small(" - Content : Texte libre + utilisation de \"for\" pour l'affichage d'une liste ordonnée").$html->get_br()
                . $html->get_sp(10).$html->get_small(" - Footer : Fiche entreprise avec logo ").$html->get_br(),
                "#",
                "img/exempleTemplateSite.png",
                "200px");
    $html->close_panel();

    $html->open_panel("Sites rendus lors de la première session : ", 'info');
        $html->ficheDevoir(
                'Abdel',
                'Devoir/devoir1/Abdel/index.php',
                "Quelques soucis de CSS, la mécanique des includes fonctionne !",
                12);
        $html->ficheDevoir(
                'Anne-Caroline',
                'Devoir/devoir1/Anne-Caroline/exercice.php',
                "L'affichage est bon ! revoir la structure HTML",
                15);
        $html->ficheDevoir(
                'Audrey',
                'Devoir/devoir1/Audrey/index.php',
                "Tentative d'integration de Bootstrap ... Consignes respectées !",
                16);
        $html->ficheDevoir(
                'Bastien',
                'Devoir/devoir1/Bastien/index.php',
                "L'art de ne pas trop en faire !",
                13);
        $html->ficheDevoir(
                'Benoit',
                'Devoir/devoir1/Benoit/index.php',
                "Ne manque l'utilisation de la boucle for ...",
                17);
        $html->ficheDevoir(
                'KevinG',
                'Devoir/devoir1/KevinG/monpremier.php',
                "Le footer remonte un peu Haut ...",
                13);
        $html->ficheDevoir(
                'KevinP',
                'Devoir/devoir1/KevinP/test1.php',
                "Mais où est le PHP ?",
                10);
        $html->ficheDevoir(
                'Mawuli',
                'Devoir/devoir1/Mawuli/test.php',
                "C'est propre et net !",
                17);
        $html->ficheDevoir(
                'Pierre-Yves',
                'Devoir/devoir1/Pierre-Yves/index.php',
                "Ou sont les inclusions ?",
                11);
        $html->ficheDevoir(
                'Swan',
                'Devoir/devoir1/Swan/index.php',
                "Affichage relatif.. mais pas centré"
                ,15);
        $html->ficheDevoir('Galaye','Devoir/devoir1/galaye/index.php',"Loading ... Pleae Wait !",'NN');
        $html->ficheDevoir('Remi','Devoir/devoir1/remi/index.php',"Loading ... Pleae Wait !",'NN');
        $html->ficheDevoir('Prince','Devoir/devoir1/prince/index.php',"Loading ... Pleae Wait !",'NN');
        $html->ficheDevoir('Lucas','Devoir/devoir1/lucas/index.php',"Loading ... Pleae Wait !",'NN');
        $html->br(3);
        $html->ficheDevoir('Correction','Devoir/devoir1/correction/index.php',"un exemple de ce qui été attendu ! !",20,'success');
    $html->close_panel();
$html->close_panel();