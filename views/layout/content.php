<?php
use Noneslad\HTML\html;
use Noneslad\Composants\WEB\pageWeb;

$html = new html();

$html->open_div(array('class' => 'content col-lg-9'));
    $html->open_div(array('class' => 'well'));
        pageWeb::getPage();
    $html->close_div();
$html->close_div();
