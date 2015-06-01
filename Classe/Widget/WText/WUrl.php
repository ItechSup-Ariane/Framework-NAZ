<?php
namespace PhpWidget\Widget\WText;


class WUrl extends WText {
    public function __construct($name = 'URL', $bloquage = false, $textDefaut = 'Entrez votre adresse URL '){
        parent::__construct($bloquage, $textDefaut ,$name);
    }
    
    public function valider($val, $widget){
        if(empty($val) && $widget->getBloquageWidget() == true){
            echo $widget->getLabelWidget().'Le champs est vide, veuillez le remplir.'."<br />\n";
        }else{
            if (!filter_var($val, FILTER_VALIDATE_URL) === true) {
                echo("$val n'est pas une URL valide"."<br />\n");
            }
        }
    }
    
    
}
