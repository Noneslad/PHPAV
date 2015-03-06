<?php
require_once './config.inc';

use Noneslad\HTML\html;

$html = new html();
$html->doctype_html5();
$html->open_html();
    include './views/layout/head.php';
    $html->open_body();
        $html->open_div(array('class'=>'container'));
            include './views/header.php';
            $html->open_div(array('class'=>'row'));
	            $html->open_aside(array('class'=>'col-lg-3'));
	                include './views/aside.php';
	            $html->close_aside();
	            $html->open_content(array('class'=>'col-lg-9'));
                	include './views/content.php';
                $html->close_content();
            $html->close_div();
            $html->open_footer(array('class'=>'col-lg-12'));
                include './views/footer.php';
            $html->close_footer();
        $html->close_div();
    $html->close_body();
$html->close_html();