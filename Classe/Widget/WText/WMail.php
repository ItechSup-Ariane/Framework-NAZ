<?php

namespace PhpWidget\Widget\WText;
/**
$bloquageWidget = false;**/

class WMail extends WText{
    
    public function __construct($name = 'Email', $bloquage = false, $textDefaut = 'Entrez votre adresse Email'){
        parent::__construct($bloquage, $textDefaut ,$name);
    }
    
     public function valider($val, $widget){
        if(empty($val) && $widget->getBloquageWidget() == true){
            echo $widget->getLabelWidget().'Le champs est vide, veuillez le remplir.'."<br />\n";
        }else{
            
            
        }
    }
}
