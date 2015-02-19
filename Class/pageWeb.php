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
            case 'cours1' :
                include 'views/cours/cours1.php';
                break;
            case 'cours2' :
                include 'views/cours/cours2.php';
                break;
            default :
                include 'views/home.php';
        }
    }
    
}
