<?php
require_once './config.inc';

use Noneslad\HTML\html;


$html = new html();
$html->doctype_html5();
$html->open_html();
include './views-acm/head.php';

$html-> open_body();
$html->open_div(array('class'=>'container'));
$html->open_div(array('class'=>'row'));
    
$html->open_header(array('class'=>'col-lg-12'));
    include './views-acm/header.php';
$html->close_header();


$html->open_aside(array('class'=>'col-lg-3'));
    include './views-acm/aside.php';
$html->close_aside();


$html->open_section(array('class'=>'col-lg-9'));
    include './views-acm/content.php';
$html->close_section();

$html->open_footer(array('class'=>'col-lg-12'));
    include './views-acm/footer.php';
$html->close_footer();

        $html->close_div();
        $html->close_div();
    $html->close_body();
$html->close_html();
        

?>




