<?php

use Noneslad\HTML\html;

$html = new html();

$html->open_head();
    $html->edit_meta_type("text/html", "UTF-8");
    $html->title_page('Site Cours PHP ! ');
    $html->css('//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css');
    $html->css('//maxcdn.bootstrapcdn.com/bootswatch/3.3.2/spacelab/bootstrap.min.css');
    $html->css('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
    $html->css('Noneslad/css/card.css');
$html->close_head();
