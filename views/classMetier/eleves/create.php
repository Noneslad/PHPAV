<?php

use Noneslad\HTML\html;
use Noneslad\HTML\none_form;

$form = new none_form();

$form->debut_form('?page=eleves&action=create');
$form->input(1,'nom','Nom : ');
$form->input(2,'prenom','Prénom : ');
$form->input(3,'formation','Formation : ');
$form->bouton_submit('Enregistrer', ['class'=>'btn btn-primary']);
$form->fin_form();
