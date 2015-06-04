<div class="container">
	<div class="row">
    <div class="col-lg-3 col-sm-6">

        <div class="card hovercard">
            <div class="cardheader">

            </div>
            <div class="avatar">
                <img alt="" src="http://lorempixel.com/100/100/people/<?php echo $eleve->getId(); ?>/">
            </div>
            <div class="info">
                <div class="title">
                    <a target="_blank" href="http://greeneco.fr/"><?php echo $eleve->getNom()." ".$eleve->getPrenom(); ?></a>
                </div>
                <div class="desc">Passionate designer</div>
                <div class="desc">Curious developer</div>
                <div class="desc">Tech geek</div>
            </div>
            <div class="bottom">
                <a class="btn btn-info btn-twitter btn-sm" href="https://twitter.com/greendecafe">
                    <i class="fa fa-twitter"></i>
                </a>
                <a class="btn btn-danger btn-sm" rel="publisher"
                   href="https://plus.google.com/109891881083607582754/posts">
                    <i class="fa fa-google-plus"></i>
                </a>
                <a class="btn btn-primary btn-sm" rel="publisher"
                   href="https://www.facebook.com/pages/Greendecafe/1570904043170250?fref=ts">
                    <i class="fa fa-facebook"></i>
                </a>
                <a class="btn btn-info btn-sm" rel="publisher" href="https://plus.google.com/greeneco">
                    <i class="fa fa-linkedin inverse"></i>
                </a>
                <br />
                <br />
                <a class="btn btn-warning btn-sm" href="?page=eleves&action=update&id=<?php echo $eleve->getId(); ?>">
                    <i class="fa fa-pencil"></i>
                </a>
                <a class="btn btn-danger btn-sm" href="?page=eleves&action=delete&id=<?php echo $eleve->getId(); ?>">
                    <i class="fa fa-trash-o"></i>
                </a>
                <a class="btn btn-info btn-sm" href="?page=eleves">
                    <i class="fa fa-list"> Retour liste</i>
                </a>
            </div>
        </div>
    </div></div>
    </div>
 <p class="clear"></p>