<?php

namespace PhpWidget\Widget\WText;

class WMail extends WText{
    
    public function __construct($name = 'Email', $bloquage = false, $textDefaut = 'Entrez votre adresse Email'){
        parent::__construct($bloquage, $textDefaut ,$name);
    }
    /**Fonction Validation du widget**/
     public function valider($val, $widget){
         /**Test si vide et compare avec le booléen blocage**/
        if(empty($val) && $widget->getBloquageWidget() == true){
            echo $widget->getLabelWidget().'Le champs est vide, veuillez le remplir.'."<br />\n";
        }else{
            
            
        }
    }
}
