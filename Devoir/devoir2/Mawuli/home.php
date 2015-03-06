<?php
use Noneslad\HTML\html;

$html = new html();
$html->alert("Bienvenue sur la page d'accueil !");
$date = date('d-m-Y');
$html->video('',array('src' => 'img/movie.mp4'));
$html->audio('',array('src' => 'img/horse.ogg'));

$text1 = 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de limprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il na pas fait que survivre cinq siècles, mais sest aussi adapté à la bureautique informatique, sans que son contenu nen soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.';
$text2 = 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. Lavantage du Lorem Ipsum sur un texte générique comme Du texte. Du texte. Du texte. est quil possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour Lorem Ipsum vous conduira vers de nombreux sites qui nen sont encore quà leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire dy rajouter de petits clins doeil, voire des phrases embarassantes).';
$text3 = 'Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie dentre elles a été altérée par laddition dhumour ou de mots aléatoires qui ne ressemblent pas une seconde à du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr quil ny a rien dembarrassant caché dans le texte. Tous les générateurs de Lorem Ipsum sur Internet tendent à reproduire le même extrait sans fin, ce qui fait de lipsum.com le seul vrai générateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison de plusieurs structures de phrases, pour générer un Lorem Ipsum irréprochable. Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches dhumour.';

$html->ficheArt('Qu est ce que le lorem',$text1,'Origine','img/videocam.jpg',$date);
$html->ficheArt('Pourquoi l utiliser',$text2,'Raison','img/videocam.jpg',$date);
$html->ficheArt('Ou l avoir',$text3,'Location','img/videocam.jpg',$date);