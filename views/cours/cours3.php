<?php
use Noneslad\HTML\html;
use Noneslad\ClassMetier\cours;

$html = new html();

$idCours = 1;

$dbCours = new Noneslad\ClassMetier\cours();
$dbCours->setId($idCours);
$cours = $dbCours->find()[$idCours];

$media = $dbCours->query('select * from mediaCours where idCours = '.$idCours);

$html->open_panel('Cours n° '.$cours->numero.' du Vendredi : '.$cours->date,'info');
$html->a('Dossier du cours',array('href'=>$cours->dossier));

foreach ($media as $medium){
    switch ($medium->type){
        case "Video" :
            $html->mediaVideo($html->u8($medium->titre), $html->u8($medium->description), $medium->lien);
            break;
        case "Pdf" :
            $html->mediaPdf($html->u8($medium->titre), $html->u8($medium->description), $medium->lien);
            break;
    }
}
$html->close_panel();
