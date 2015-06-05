<?php

namespace Noneslad\Composants\WEB;

use Noneslad\Tools\tools;
use Noneslad\ClassMetier\eleve;

/**
 * Description of pageWeb
 *
 * @author Job
 */
class pageWeb {
    
    public static function getPage(){
        $page = tools::fromRequest('page');
        $action = tools::fromRequest('action');
        $id = tools::fromRequest('id');
        
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
            case 'test' :
                include 'views/test.php';
                break;
            case 'eleves' :
                switch ($action){
                    case 'create' :
                        switch ($_SERVER['REQUEST_METHOD']){
                            case 'GET':
                                include 'views/classMetier/eleves/create.php';
                                break;
                            case 'POST':
                                $eleve = new eleve();
                                $eleve->setNom(tools::fromForm('nom'));
                                $eleve->setPrenom(tools::fromForm('prenom'));
                                $eleve->setFormation(tools::fromForm('formation'));
                                $eleve->insert();
                                tools::setInFlashBag('Notice', "L'élève ".$eleve->getNom()." ".$eleve->getPrenom()." à été enregistré avec succés !");
                                include 'views/classMetier/eleves/liste.php';
                                break;
                        }
                        break;
                    case 'update' :
                         switch ($_SERVER['REQUEST_METHOD']){
                            case 'GET':
                                $eleve = new eleve(tools::fromRequest('id'));
                                $eleve->load();
                                $formData['id'] = $eleve->getId();
                                $formData['nom'] = $eleve->getNom();
                                $formData['prenom'] = $eleve->getPrenom();
                                $formData['formation'] = $eleve->getFormation();
                                include 'views/classMetier/eleves/update.php';
                                break;
                            case 'POST':
                                $eleve = new eleve(tools::fromForm('id'));
                                $eleve->setNom(tools::fromForm('nom'));
                                $eleve->setPrenom(tools::fromForm('prenom'));
                                $eleve->setFormation(tools::fromForm('formation'));
                                $eleve->update();
                                tools::setInFlashBag('Notice', "L'élève ".$eleve->getNom()." ".$eleve->getPrenom()." à été modifié avec succés !");
                                include 'views/classMetier/eleves/liste.php';
                                break;
                        }
                        break;
                    case 'delete' :
                        $eleve = new eleve(tools::fromRequest('id'));
                        $eleve->delete();
                        tools::setInFlashBag('Notice', "L'élève ".$eleve->getNom()." ".$eleve->getPrenom()." à été supprimé !");
                        include 'views/classMetier/eleves/liste.php';
                        
                        
                        break;
                    case 'read' :
                        $eleve = new eleve(tools::fromRequest('id'));
                        include 'views/classMetier/eleves/show.php';
                        break;
                    default :
                        include 'views/classMetier/eleves/liste.php';
                    break;
                    
                }                
                break;
            default :
                include 'views/home.php';
        }
    }
    
}
