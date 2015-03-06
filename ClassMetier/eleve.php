<?php
namespace Noneslad\ClassMetier;
use Noneslad\Tools\model;

class eleve extends model{
    
   protected $id;
   protected $nom;
   protected $prenom;
   protected $formation;
   
   function __construct() {
       
   }
   
// <editor-fold defaultstate="collapsed" desc="Getters">
   function getId() {
       return $this->id;
   }

   function getNom() {
       return $this->nom;
   }

   function getPrenom() {
       return $this->prenom;
   }

   function getFormation() {
       return $this->formation;
   }

// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="Setters">
    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setFormation($formation) {
        $this->formation = $formation;
    }

// </editor-fold>


}
