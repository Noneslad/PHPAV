<?php
use Noneslad\HTML\html;

$html = new html();


$html->open_div(array('class' => 'header jumbotron'));
    $html->h1("Site Web Pour le Cours PHP");
    $html->small("Pour manipuler PHP !");
    $html->p($html->get_sp());
    $html->boutonLien('Home', 'index.php', 'info');
    $html->boutonLienDisabled('Liste des Eleves', 'index.php', 'info');
    $html->boutonLienDisabled('Gestion Blog', 'index.php', 'info');
$html->close_div();
