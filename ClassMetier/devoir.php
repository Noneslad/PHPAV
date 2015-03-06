<?php

namespace Noneslad\ClassMetier;

use Noneslad\Tools\model;

class devoir extends model
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
    * @var Le titre du devoir
    */
    protected $titre;
    /**
     *
     * @var text La description des choses à faires
     */
    protected $description;
    /**
     *
     * @var string le lien de l'image 
     */
    protected $lienImage;
    /**
     *
     * @var string la source de l'image
     */
    protected $srcImage;
    /**
     *
     * @var int la largeur de l'image en pixel
     */
    protected $largeurImage;
    
    function __construct() {
        parent::__construct();
    }

    // <editor-fold defaultstate="collapsed" desc="Getters">
        function getId() {
            return $this->id;
        }
        function getNumero() {
            return $this->numero;
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

        function getSrcImage() {
            return $this->srcImage;
        }

        function getLargeurImage() {
            return $this->largeurImage;
        }

    // </editor-fold>
    // <editor-fold defaultstate="collapsed" desc="Setters">

    function setId($id) {
        $this->id = $id;
    }
    function setNumero($numero) {
        $this->numero = $numero;
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

    function setSrcImage($srcImage) {
        $this->srcImage = $srcImage;
    }

    function setLargeurImage($largeurImage) {
        $this->largeurImage = $largeurImage;
    }

// </editor-fold>

    

}
?>