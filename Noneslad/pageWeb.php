<?php

namespace Noneslad\Composants\WEB;

use Noneslad\Tools\tools;

/**
 * Description of pageWeb
 *
 * @author Job
 */
class pageWeb {
    
    public static function getPage(){
        $page = tools::fromRequest('page');
        
        switch($page){
            case 'devoir1' :
                include 'views/devoirs/devoir1.php';
                break;
            case 'devoir2' :
                include 'views/devoirs/devoir2.php';
                break;
            case 'cours1' :
                include 'views/cours/cours1.php';
                break;
            case 'cours2' :
                include 'views/cours/cours2.php';
                break;
            case 'cours3' :
                include 'views/cours/cours3.php';
                break;
            case 'listeDevoir' :
                include 'views/classMetier/devoir/liste.php';
                break;
            case 'listeCours' :
                include 'views/classMetier/cours/liste.php';
                break;
            default :
                include 'views/home.php';
        }
    }
    
}
