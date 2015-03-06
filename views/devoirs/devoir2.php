<?php
use Noneslad\HTML\html;

$html = new html();
$html->open_panel('Devoir N°2', 'warning');
    $html->open_panel('Consignes', 'success');
        $html->media("Manipuler et agrémenter une classe PHP générant du..",
                "L'objectif de cet exercice était de manipuler "
                . "Une classe en vue de reproduire le template précédemment créé "
                . "La consigne était la suivante :".$html->get_br(2)
                . $html->get_sp(5)." - Reproduire le template du site à l'aide de la classe HTML.".$html->get_br()
                . $html->get_sp(5)." - Créer les élément Html 5 au sein de la classe html et les utiliser pour construire le template".$html->get_small('(header, aside, section, article, footer ...)',array('class'=>'italic')).$html->get_br()
                . $html->get_sp(5)." - Ajouter les balise audio et video".$html->get_br()
                . $html->get_sp(5)." - Pour les CRW reproduire la fiche CV avec la classe HTML ".$html->get_br()
                . $html->get_sp(5)." - Pour les CDI créer une methode de la classe HTML permettant de faire afficher une fiche article ".$html->get_br(),
                "#",
                "img/CodePhp.jpg",
                "200px");
    $html->close_panel();

    $html->open_panel("Sites rendus lors de la Deuxieme session : ", 'info');
        $html->ficheDevoir(
                'Abdel',
                'Devoir/devoir2/Abdel/',
                "Manque des balises et utilisation confuse ... ",
                13);
        $html->ficheDevoir(
                'Anne-Caroline',
                'Devoir/devoir2/Anne-Caroline/',
                "Les methodes sont correctement utilisées",
                14);
        $html->ficheDevoir(
                'Audrey',
                'Devoir/devoir2/Audrey/',
                "Loading ... Please Wait !",
                'NN');
        $html->ficheDevoir(
                'Bastien',
                'Devoir/devoir2/Bastien/',
                "Tout y est ! + factorisation des methodes ",
                17);
        $html->ficheDevoir(
                'Benoit',
                'Devoir/devoir2/Benoit/',
                "Factorisation non utilisée !?",
                16);
        $html->ficheDevoir(
                'KevinG',
                'Devoir/devoir2/KevinG/monpremier.php',
                "La classe Html est utilisé mais où sont les éléments HTML5 ??",
                12);
        $html->ficheDevoir(
                'KevinP',
                'Devoir/devoir2/KevinP/',
                "LE job est fait ! Manque quelques éléments",
                14);
        $html->ficheDevoir(
                'Mawuli',
                'Devoir/devoir2/Mawuli/',
                "Il est plaisant de voir l'utilisation ...",
                15);
        $html->ficheDevoir(
                'Pierre-Yves',
                'Devoir/devoir2/Pierre-Yves/',
                "C'est bien rangé !",
                15);
        $html->ficheDevoir(
                'Swan',
                'Devoir/devoir2/Swan/',
                "Factorisation efficace !"
                ,17);
        $html->ficheDevoir(
                'Galaye','Devoir/devoir2/galaye/',
                "Manque Quelques élément et tu redleclare la methode open_div() !!",
                13);
        $html->ficheDevoir(
                'Remi',
                'Devoir/devoir2/remi/',
                "1,5 element Html trouvé et pas d'utilisation dans les vues !",
                11);
        $html->ficheDevoir(
                'Prince',
                'Devoir/devoir2/prince/',
                "Manques les methodes auto fermantes",
                13);
        $html->ficheDevoir(
                'Lucas',
                'Devoir/devoir2/lucas/',
                "L'inventeur de la balise '<content>' ",
                15);
    $html->close_panel();
$html->close_panel();