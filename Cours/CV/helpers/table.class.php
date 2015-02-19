<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of table
 *
 * @author a.frier
 */
class Table {
    
    
    public function Table(){
        
    }
    function debut_table($attributs = array()){
        $r = '';
        $r .= '<table';
        if(is_array($attributs)&& !empty($attributs)){
            foreach ($attributs as $attr => $valeur) {
                $r .= ' '.$attr.' = "'.$valeur.'"';
            }
        }
        $r .= '>';
        echo $r;
    }
    function fin_table(){
        echo '</table>';
    }
    function debut_tr($attributs = array()){
        $r = '';
        $r .= '<tr';
        if(is_array($attributs)&& !empty($attributs)){
            foreach ($attributs as $attr => $valeur) {
                $r .= ' '.$attr.' = "'.$valeur.'"';
            }
        }
        $r .= '>';
        echo $r;
    }
    function fin_tr(){
        echo '</tr>';
    }
    function td($text, $attributs = array()){
        $r = '<td';
        if(is_array($attributs)&& !empty($attributs)){
            foreach ($attributs as $attr => $valeur) {
                $r .= ' '.$attr.' = "'.$valeur.'"';
            }
        }
        $r .= '>'.$text.'</td>';
        echo $r;
    }
    function th($text, $attributs = array()){
        $r = '<th';
        if(is_array($attributs)&& !empty($attributs)){
            foreach ($attributs as $attr => $valeur) {
                $r .= ' '.$attr.' = "'.$valeur.'"';
            }
        }
        $r .= '>'.$text.'</th>';
        echo $r;
    }
   
    
    function get_debut_table($attributs = array()){
        $r = '';
        $r .= '<table';
        if(is_array($attributs)&& !empty($attributs)){
            foreach ($attributs as $attr => $valeur) {
                $r .= ' '.$attr.' = "'.$valeur.'"';
            }
        }
        $r .= '>';
        return $r;
    }
    function get_fin_table(){
        return '</table>';
    }
    function get_debut_tr($attributs = array()){
        $r = '';
        $r .= '<tr';
        if(is_array($attributs)&& !empty($attributs)){
            foreach ($attributs as $attr => $valeur) {
                $r .= ' '.$attr.' = "'.$valeur.'"';
            }
        }
        $r .= '>';
        return $r;
    }
    function get_fin_tr(){
        return '</tr>';
    }
    function get_td($text, $attributs = array()){
        $r = '<td';
        if(is_array($attributs)&& !empty($attributs)){
            foreach ($attributs as $attr => $valeur) {
                $r .= ' '.$attr.' = "'.$valeur.'"';
            }
        }
        $r .= '>'.$text.'</td>';
        return $r;
    }
    function get_th($text, $attributs = array()){
        $r = '<th';
        if(is_array($attributs)&& !empty($attributs)){
            foreach ($attributs as $attr => $valeur) {
                $r .= ' '.$attr.' = "'.$valeur.'"';
            }
        }
        $r .= '>'.$text.'</th>';
        return $r;
    }
    public function debut_td($attributs = array()){
            $r = "";
            $r .= '<td';
            if(!empty($attributs)){
                foreach ($attributs as $attr => $valeur) {
                    $r .= ' '.$attr.' = "'.$valeur.'"';
                }
            }
            $r .= '>';
            echo $r;
        }
    public function fin_td(){
            echo '</td>';
        } public function get_debut_td($attributs = array()){
            $r = "";
            $r .= '<td';
            if(!empty($attributs)){
                foreach ($attributs as $attr => $valeur) {
                    $r .= ' '.$attr.' = "'.$valeur.'"';
                }
            }
            $r .= '>';
            return $r;
        }
    public function get_fin_td(){
            return '</td>';
        }
}
?>
