<?php
use Noneslad\HTML\html;

$html = new html();


$html->open_div(array('class' => 'header hero-unit'));
    $html->h1("Site Web Pour le Cours PHP");
    $html->p("Pour manipuler PHP !");
    $html->open_p();
        $html->boutonLien('Home', 'index.php', 'info');
        $html->boutonLien('Liste des Eleves', '?page=eleves', 'info');
        $html->boutonLienDisabled('Gestion Blog', 'index.php', 'info');
        $html->boutonLien('Page pour des test', '?page=test', 'danger');
    $html->close_p();
$html->close_div();
