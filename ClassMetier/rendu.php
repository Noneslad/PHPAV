<?php
namespace Noneslad\ClassMetier;
use Noneslad\Tools\model;

class rendu extends model{
   
    protected $id;
    protected $idDevoir;
    protected $idEleve;
    protected $commentaire;
    protected $note;
    
    function __construct() {
        
    }
    
    function getId() {
        return $this->id;
    }
    function getIdEleve() {
        return $this->idEleve;
    }
    function getCommentaire() {
        return $this->commentaire;
    }
    function getNote() {
        return $this->note;
    }

    function setId($id) {
        $this->id = $id;
    }
    function setIdEleve($idEleve) {
        $this->idEleve = $idEleve;
    }
    function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
    }
    function setNote($note) {
        $this->note = $note;
    }


}
