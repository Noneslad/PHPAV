<?php
use Noneslad\HTML\html;

$html = new html();

$html->open_head();
    $html->edit_meta_type("text/html", "utf-8");
    $html->title_page('COURS PHP: TP PARTIE CRW ');
    $html->css('//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css');
    $html->css('//maxcdn.bootstrapcdn.com/bootswatch/3.3.2/spacelab/bootstrap.min.css');
$html->close_head();
