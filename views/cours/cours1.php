<?php
use Noneslad\HTML\html;

$html = new html();

$html->open_panel('Cours n° 1 du Vendredi : 23/01/2015','info');
$html->a('Dossier du cours',array('href'=>'cours/20150123/'));

$html->mediaPDF(
        'Cours Prezi Intro PHP en PDF !',
        ""
        . "Ce Prezi presente php, ses créateurs, son éco-système...<br />"
        . "Il fait ensuite un zoom sur la CheatSheet qui accompagne ce cours, pour détailler points par points les fondamentaux de la structure"
        . "de PHP, sa syntaxe, illustrée par des exemples.<br />"
        . "Ce document est aussi diponible dans sa version prezi ".$html->get_a('ICI', array('href'=>'https://prezi.com/pd_b0maaypbt/cours-intro-php-cdi/')),
        'cours/20150123/cours20150123.pdf');
$html->mediaPDF(
        'CheatSheet PHP',
        "Il s'agit d'une CheatSheet reprenant les fondamentaux de php !<br />"
        . "Une aide qympa pour se rappeler les structure de controle et la syntaxe ! "
        . "Ce document provient du site ".$html->get_a('Cheatography', array('href'=>'http://www.cheatography.com/zetura/cheat-sheets/php-syntaxe-and-fondamentaux-fr/')).' et est proposé par Zetura ! ',
        'cours/20150123/cheatsheetPHP.pdf');
$html->close_panel();