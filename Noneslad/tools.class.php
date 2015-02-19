<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Noneslad\Tools;

/**
 * Description of tools
 *
 * @author Job
 */
class tools {
    public static function fromRequest($term){
    if (isset($_GET[$term]) && !empty($_GET[$term]))
        {
            $ret = $_GET[$term];
        }
        else if (isset($_POST[$term]) && !empty($_POST[$term]))
        {
            $ret = $_POST[$term];
        }
        else
        {
             $ret = false;   
    }
    return $ret;
}
    public static function getColorForNote($note){
        if($note == 'NN'){
            $button = 'danger';
        }else{
            switch ($note){
                case $note > 16 :
                    $button = 'success';
                    break;
                case $note > 14 :
                    $button = 'info';
                    break;
                case $note > 13 :
                    $button = 'primary';
                    break;
                case $note > 11 :
                    $button = 'warning';
                    break;
                case $note < 8 :
                    $button = 'danger';
                    break;
                default :
                    $button = 'default';
            } 
        }
        
        return $button;
    }
}
