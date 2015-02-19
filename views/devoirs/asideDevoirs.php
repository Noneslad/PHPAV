<?php
use Noneslad\HTML\html;

$html = new html();

$html->open_panel('Liste des Devoirs','danger');
        $html->boutonLien('<i class="glyphicons glyphicons-list"></i>Devoirs N°1', '?page=devoir1', 'info',190);
$html->close_panel();