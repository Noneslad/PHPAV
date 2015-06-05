

<?php

use Noneslad\HTML\html;
use Noneslad\ClassMetier\eleve;
use Noneslad\Tools\tools;

$html = new html();


if (tools::getInFlashBag('Notice')) {
    $html->alert(tools::getInFlashBag('Notice'));
}
$staticEleve = new eleve();
$couleur = array('red','blue','green','yellow','orange','red','blue','green','yellow','orange');
$i = 0;
?>

<div class="row">
    <?php
    foreach ($staticEleve->find_all() as $eleve) {
        ?>
        <div class="col-lg-4">
            <div class="cardlist <?php echo $couleur[$i]; ?>">
                <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                <div class="avatar">
                    <img src="http://lorempixel.com/100/100/people/<?php echo $eleve->id; ?>/" alt="" />
                </div>
                <div class="content">
                    <p><?php echo $eleve->nom . " " . $eleve->prenom; ?> <br>
                        <?php echo $eleve->formation; ?>
                    </p>
                    <p>
                        <a class="btn btn-warning btn-sm" href="?page=eleves&action=update&id=<?php echo $eleve->id; ?>">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href="?page=eleves&action=delete&id=<?php echo $eleve->id; ?>">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </p>
                    <p><a href="?page=eleves&action=read&id=<?php echo $eleve->id; ?>"><button class="btn btn-block eye <?php echo $couleur[$i]; ?>"><i class="fa fa-eye fa-2x" ></i></button></a></p>
                </div>
            </div>
        </div>
        <?php
        $i++;
    }
    ?>
</div>    
<?php
$html->open_div(array('class' => 'well'));
$html->boutonLien('Ajouter', '?page=eleves&action=create', 'success');
$html->close_div();
