<?php
use Noneslad\HTML\html;
use Noneslad\Composants\WEB\pageWeb;

$html = new html();

$html->open_div(array('class' => 'content col-lg-9'));
    $html->open_div(array('class' => 'well'));
        pageWeb::getPage();
        $html->video('',array('src'=>'img/'));
        $html->audio('',array('src'=>'img/'));
        $date = date('d-m-Y');
        $html->creaArticle('TITRE','img/icoPDF.jpg','blablablablablablablablablablablablablablablablabla','sous titre','40px',$date);
    $html->close_div();
$html->close_div();
