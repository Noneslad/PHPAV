<?php

namespace Noneslad\ClassMetier;

use Noneslad\Tools\model;

class cours extends model
{ 
    
    /**
    * @var int 
    */
    protected $id;
    /**
    * @var int 
    */
    protected $numero;
    /**
    * @var La date du cours
    */
    protected $date;
    /**
     *
     * @var string le chemin vers le dossier du cours
     */
    protected $dossier;
    
    
    function __construct() {
        parent::__construct();
    }

    function getId() {
        return $this->id;
    }

    function getNumero() {
        return $this->numero;
    }

    function getDate() {
        return $this->date;
    }

    function getDossier() {
        return $this->dossier;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setDate(La $date) {
        $this->date = $date;
    }

    function setDossier($dossier) {
        $this->dossier = $dossier;
    }



    

}
?>