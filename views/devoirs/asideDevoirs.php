<?php

use Noneslad\HTML\html;
use Noneslad\ClassMetier\devoir;

$html = new html();
$devoir = new devoir();
$devoirs = $devoir->find_all();
$html->open_panel('Liste des Devoirs'.$html->get_span($html->get_a('<i class = "glyphicon glyphicon-list"></i>',['href'=>'?page=listeDevoir']), ['class'=>'pull-right']), 'warning');
foreach ($devoirs as $devoir) {
    $html->boutonLien('Devoir N°' . $devoir->numero, '?page=devoir' . $devoir->numero, 'warning', 190);
    $html->br(2);
}
$html->close_panel();
