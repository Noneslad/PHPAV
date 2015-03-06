<?php
require_once './config.inc';

use Noneslad\HTML\html;


$html = new html();
$html->doctype_html5();
$html->open_html();
    include './views/layout/head.php';
    $html->open_body();
        $html->open_div(array('class'=>'container'));
            include './views/layout/header.php';
            $html->open_div(array('class'=>'row'));
                include './views/layout/aside.php';
                include './views/layout/content.php';
                include './views/layout/footer.php';

$html->open_header(array('class' => 'header'));
$html->open_footer(array('class' => 'footer'));
$html->open_nav(array('class' => 'nav'));
$html->open_aside(array('class' => 'aside'));
$html->open_section(array('class' => 'section'));


$html->open_article(array('class' => 'article'));




$html->video('http://techslides.com/demos/sample-videos/small.mp4');

$html->audio('http://media.w3.org/2010/07/bunny/04-Death_Becomes_Fur.oga');









            $html->close_div();
        $html->close_div();
    $html->close_body();
$html->close_html();
        