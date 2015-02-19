<?php
use Noneslad\HTML\html;

$html = new html();
$html->open_panel('Devoir N°1', 'danger');
    $html->open_panel('Consignes', 'success');
        $html->media("Réaliser le template d'un site en PHP",
                "L'objectif de cet exercie était de manipuler PHP"
                . "pour lui faire faire ce qpour quoi il à été conçu : gerer et administrer des pages web."
                . "La consigne était la suivante :<br />"
                . " Réaliser un site avec un header un aside, un content et un footer. Le tout centré sur la page et faisant appel aux include de php"
                . "",
                "#",
                "img/exempleTemplateSite.png",
                "150px");
    $html->close_panel();

    $html->open_panel("Sites rendus lors de la première session : ", 'info');
        $html->ficheDevoir('Abdel','Devoir/devoir1/Abdel/index.php',"C'est pas trop mal ça ressemble à ce qui été demandé",14);
        $html->ficheDevoir('Anne-Caroline','Devoir/devoir1/Anne-Caroline/exercice.php',"Ca passe mais le découpage de pages n'est pas effectif !",13);
        $html->ficheDevoir('Audrey','Devoir/devoir1/Audrey/index.php',"Tentative d'integration de Bootstrap ...",15.5);
        $html->ficheDevoir('Bastien','Devoir/devoir1/Bastien/index.php',"Ne pas trop en faire !",12);
        $html->ficheDevoir('Benoit','Devoir/devoir1/Abdel/Benoit.php',"C'est propre et bien finit",17);
        $html->ficheDevoir('KevinG','Devoir/devoir1/KevinG/monpremier.php',"Le footer remonte un peu Haut ...",13);
        $html->ficheDevoir('KevinP','Devoir/devoir1/KevinP/test1.php',"La structure semble respécté mais c'eut été mieux centré !",14);
        $html->ficheDevoir('Mawuli','Devoir/devoir1/Mawuli/test.php',"C'est propre et net !",17);
        $html->ficheDevoir('Pierre-Yves','Devoir/devoir1/Pierre-Yves/index.php',"C'est assez étrange ...",14);
        $html->ficheDevoir('Swan','Devoir/devoir1/Swan/index.php',"Full responsive... mais pas centré",15);
        $html->ficheDevoir('Remi','Devoir/devoir1/remi/index.php',"Loading ... Pleae Wait !",'NN');
        $html->ficheDevoir('Prince','Devoir/devoir1/prince/index.php',"Loading ... Pleae Wait !",'NN');
        $html->ficheDevoir('Lucas','Devoir/devoir1/lucs/index.php',"Loading ... Pleae Wait !",'NN');
    $html->close_panel();
$html->close_panel();