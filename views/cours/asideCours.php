<?php

use Noneslad\HTML\html;

$html = new html();

$html->open_panel('Liste des Cours','info');
        $html->boutonLien('<i class="glyphicons glyphicons-list"></i>Cours N°1', '?page=cours1', 'info',190);
        $html->br();
        $html->boutonLien('<i class="glyphicons glyphicons-list"></i>Cours N°2', '?page=cours2', 'info',190);
$html->close_panel();