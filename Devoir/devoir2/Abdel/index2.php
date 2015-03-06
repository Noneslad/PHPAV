<?php

require_once './config.inc';

use Noneslad\HTML\html;

$html = new html();
$html->doctype_html5();
$html->open_html();
include './views2/layout/head.php';
$html->open_body();
$html->open_div(array('class' => 'container'));
$html->open_div(array('class' => 'row'));
$html->open_div(array('class' => 'col-lg-12'));
include './views2/header.php';
$html->close_div();
$html->open_aside(array('class' => 'col-lg-3'));
include './views2/aside.php';
$html->close_aside();
$html->open_aside(array('class' => 'col-lg-3'));
include './views2/aside2.php';
$html->close_aside();
$html->open_section(array('class' => 'col-lg-9'));
include './views2/content.php';
$html->open_div(array('class' => 'panel panel-default'));
$html->open_div(array('class' => 'panel-heading'));
echo "Titre";
$html->close_div();
$html->open_div(array('class' => 'panel-body'));
$html->img(array('src' => 'img2/logo.png', 'style' => 'height:200px; float:left;'));
$html->close_div();
$html->h3("Ceci est un sous titre", array('class' => 'panel-justify'));
$html->open_p(array('class' => 'text-right', 'style' => 'text-align:justify;'));
$html->open_div(array('class' => 'panel-justify'));
echo "Le Lorem Ipsum est simplement du faux texte employé 
                dans la composition et la mise en page avant impression.
                Le Lorem Ipsum est le faux texte standard de l'imprimerie
                depuis les années 1500, quand un peintre anonyme assembla
                ensemble des morceaux de texte pour réaliser un livre spécimen
                de polices de texte. Il n'a pas fait que survivre cinq siècles,
                mais s'est aussi adapté à la bureautique informatique, 
                sans que son contenu n'en soit modifié. Il a été popularisé 
                dans les années 1960 grâce à la vente de feuilles Letraset
                contenant des passages du Lorem Ipsum, et, plus récemment,
                par son inclusion dans des applications de mise en page de 
                texte, comme Aldus PageMaker";
$html->close_p;
$html->close_div();
$html->open_p(array('class' => 'pull-right'));
$date = date("m.d.y");
echo $date;
$html->close_p;





$html->close_div();
$html->close_div();

$html->close_section();


$html->open_footer(array('class' => 'col-lg-12'));
include './views2/footer.php';
$html->close_footer();
$html->close_div();
$html->close_div();
$html->close_body();
$html->close_html();
/*
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cours php</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container ">
            <div class="row">
                <header class="col-lg-12">
                    <?php include './views/header.php';?>
                </header>
                <aside class="col-lg-3 ">
                    <?php include './views/aside.php';?>
                </aside>
                <section class="col-lg-9 ">
                    <?php include './views/content.php';?>
                </section> 
                <footer class="col-lg-12 ">
                    <?php include './views/footer.php';?>
                </footer>
            </div>
        </div>
    </body>
</html>


*/