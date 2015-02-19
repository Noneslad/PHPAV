<?php
require_once './config.inc';

use Noneslad\HTML\html;
use Noneslad\Composants\WEB\pageWeb;

$html = new html();
$html->doctype_html5();
$html->open_html();
    $html->open_head();
        $html->edit_meta_type("text/html", "utf-8");
        $html->title_page('Site Cours PHP ! ');
        $html->css('//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css');
        $html->css('//maxcdn.bootstrapcdn.com/bootswatch/3.3.2/spacelab/bootstrap.min.css');
    $html->close_head();
    $html->open_body();
        $html->open_div(array('class'=>'container'));
            $html->open_div(array('class'=>'header jumbotron'));
                $html->h1("Site Web Pour le Cours PHP");
                $html->small("Pour manipuler PHP !");
                $html->p($html->get_sp());
                $html->boutonLien('Home', 'index.php', 'info');
            $html->close_div();
            $html->open_div(array('class'=>'row'));
                $html->open_div(array('class'=>'aside col-lg-3'));
                    $html->open_div(array('class'=>'well'));
                        include('views/aside.php');
                    $html->close_div();
                $html->close_div();
                $html->open_div(array('class'=>'content col-lg-9'));
                    $html->open_div(array('class'=>'well'));
                        pageWeb::getPage();
                    $html->close_div();
                $html->close_div();
                $html->open_div(array('class'=>' col-lg-12'));
                    $html->open_div(array('class'=>'well'));
                        $html->alert('Ce site servira de support pour ce cours !');
                    $html->close_div();
                $html->close_div();
            $html->close_div();
        $html->close_div();
    $html->close_body();
$html->close_html();
        