<?php
use Noneslad\HTML\html;
use Noneslad\ClassMetier\devoir;

$html = new html();
$devoir = new devoir();
$devoirs = $devoir->find_all();
foreach ($devoirs as $devoir) {
    $html->open_panel('Devoir N°'.$devoir->numero.' ', 'success');
        $html->media(
            $html->u8($devoir->titre),
            $html->u8($devoir->description),
            $devoir->lienImage, 
            $devoir->srcImage,
            $devoir->largeurImage.'px');
    $html->close_panel();
}
