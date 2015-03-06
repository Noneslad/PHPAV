<?php
use Noneslad\HTML\html;
use Noneslad\ClassMetier\cours;

$html = new html();
$dbcours = new cours();
$cours = $dbcours->find_all();
sort($cours);
foreach ($cours as $uncours) {
    $media = $dbcours->query('select * from mediaCours where idCours = '.$uncours->id);
    $html->open_panel('Cours n° '.$uncours->numero.' du Vendredi : '.$uncours->date,'info');
    $html->a('Dossier du cours',array('href'=>$uncours->dossier));
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
}
