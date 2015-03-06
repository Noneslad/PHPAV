<?php

require_once './config.inc';

use Noneslad\HTML\html;

$html = new html();
$html->doctype_html5();
$html->open_html();

include './views2/head.php';

    $html->open_body();
        $html->open_div(array('class'=>'container'));
            $html->open_div(array('class'=>'row'));
                $html->open_div(array('class'=>'col-lg-12'));
                     include './views2/header.php';
                $html->close_div();

                $html->open_div(array('class'=>'col-lg-3'));
                      include './views2/aside.php';
                $html->close_div();

                $html->open_div(array('class'=>'col-lg-9'));
                      include './views2/content.php';
                $html->close_div();

                $html->open_div(array('class'=>'col-lg-12'));
                      include './views2/footer.php';
                $html->close_div();
                
            $html->close_div();
        $html->close_div();
    $html->close_body();
$html->close_html();


