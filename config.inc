<?php

define('PARAM_hote', 'localhost');
define('PARAM_port','3306');
define('PARAM_nom_bd','phpav');
define('PARAM_utilisateur','root');
define('PARAM_mot_passe','');

define('IMG_ICON_PDF','img/icoPDF.png');
define('IMG_ICON_VIDEO','img/icoVIDEO.png');


require_once './Noneslad/tools.class.php';
require_once './ClassMetier/devoir.php';
require_once './ClassMetier/eleve.php';
require_once './ClassMetier/rendu.php';
require_once './ClassMetier/cours.php';
require_once './ClassMetier/mediaCours.php';
require_once './Noneslad/pageWeb.php';
require_once './Noneslad/html.class.php';
require_once './Noneslad/none_form.class.php';

