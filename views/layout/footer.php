<?php
use Noneslad\HTML\html;

$html = new html();

$html->open_div(array('class'=>' col-lg-12'));
    $html->open_div(array('class'=>'well'));
        $html->alert('Ce site servira de support pour ce cours !');
    $html->close_div();
$html->close_div();

