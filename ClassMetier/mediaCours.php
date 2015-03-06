<?php

namespace Noneslad\ClassMetier;

use Noneslad\Tools\model;

class mediaCours extends model
{ 
    
    /**
    * @var int 
    */
    protected $id;
    /**
    * @var int le cours lors duquel ce media à été difusé
    */
    protected $idCours;
    /**
    * @var Le titre du media
    */
    protected $titre;
    /**
     *
     * @var text La description du media
     */
    protected $description;
    /**
     *
     * @var string le lien de l'image 
     */
    protected $lienImage;
    /**
     *
     * @var string le type de media attendu
     */
    protected $type;
    /**
     *
     * @var string le lien vers le media
     */
    protected $lien;
    
    function __construct() {
        parent::__construct();
    }

    function getId() {
        return $this->id;
    }

    function getIdCours() {
        return $this->idCours;
    }

    function getTitre() {
        return $this->titre;
    }

    function getDescription() {
        return $this->description;
    }

    function getLienImage() {
        return $this->lienImage;
    }

    function getType() {
        return $this->type;
    }

    function getLien() {
        return $this->lien;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdCours($idCours) {
        $this->idCours = $idCours;
    }

    function setTitre(Le $titre) {
        $this->titre = $titre;
    }

    function setDescription(text $description) {
        $this->description = $description;
    }

    function setLienImage($lienImage) {
        $this->lienImage = $lienImage;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setLien($lien) {
        $this->lien = $lien;
    }


    

}
?>