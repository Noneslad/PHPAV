<?php



$html->open_div(array('class' => 'header jumbotron'));
    $html->h1("Site Web Pour le Cours PHP");
    $html->small("Pour manipuler PHP !");
    $html->p($html->get_sp());
    $html->boutonLien('Home', 'index.php', 'info');
$html->close_div();
