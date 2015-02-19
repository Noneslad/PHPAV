<?php
use Noneslad\HTML\html;

$html = new html();

$html->open_panel('Cours n° 2 du Vendredi : 20/02/2015','info');
$html->a('Dossier du cours',array('href'=>'cours/20150220/'));

$html->mediaPDF(
        'La proffessionnalisation du monde PHP !',
        ""
        . "Ce Prezi presente Les acteurs, les outils de php<br />"
        . "Il fait ensuite état de la collaboration entre Framework et CSS"
        . "Puis fait un comparatif avec d'autre monde de l'informatique (JS et Java)"
        . "Enfin il fait une conclusion sur la maturité parfois décriée de ce language <br />"
        . "Ce document est aussi diponible dans sa version prezi ".$html->get_a('ICI', array('href'=>'https://prezi.com/ks-ax2umtqpw/professionalisation-du-monde-php/')),
        'cours/20150220/PHPPRO.pdf');
$html->close_panel();