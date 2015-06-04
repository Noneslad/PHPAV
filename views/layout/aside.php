<?php
use Noneslad\HTML\html;

$html = new html();

$html->open_div(array('class' => 'aside col-lg-3 span3'));
    $html->open_div(array('class' => 'well'));
        include 'views/cours/asideCours.php';
        include 'views/devoirs/asideDevoirs.php';
    $html->close_div();
$html->close_div();


