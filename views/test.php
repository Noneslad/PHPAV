<?php

use Noneslad\HTML\html;
use Noneslad\ClassMetier\cours;

$html = new html();

$html->h1('Espace de test',array('class'=>'alert alert-info'));

$dbCours = new cours();
$tousLesCours = $dbCours->find_all();
var_dump($tousLesCours);
