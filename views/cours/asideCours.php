<?php

use Noneslad\HTML\html;

$html = new html();

$html->open_panel('Liste des Cours'.$html->get_span($html->get_a('<i class = "glyphicon glyphicon-list"></i>',['href'=>'?page=listeCours']), ['class'=>'pull-right']),'info');
        $html->boutonLien('<i class="glyphicons glyphicons-list"></i>Cours N°1', '?page=cours1', 'info',190);
        $html->br(2);
        $html->boutonLien('<i class="glyphicons glyphicons-list"></i>Cours N°2', '?page=cours2', 'info',190);
        $html->br(2);
        $html->boutonLien('<i class="glyphicons glyphicons-list"></i>Cours N°3', '?page=cours3', 'info',190);
$html->close_panel(); 