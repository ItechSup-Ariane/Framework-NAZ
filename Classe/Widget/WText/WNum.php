<?php

namespace PhpWidget\Widget\WText;

class WNum extends WText{
    
    public function __construct($name = 'Num', $bloquage = true, $textDefaut = 'Entrez votre numero de telephone ' ){
        parent::__construct($bloquage, $textDefaut ,$name);
    }
    
    public function valider($val, $widget){
        if(empty($val) && $widget->getBloquageWidget() == true){
            echo $widget->getLabelWidget().'Le champs est vide, veuillez le remplir.'."<br />\n";
        }else{
            $long = strlen($val);
            if ($long < 10) {
                echo 'Le numero est trop court. '."<br />\n";
            } else{
                if ($long > 10){
                    echo 'Le numero est trop long. '."<br />\n";
                 }
            }
            if (is_numeric($val) == false) {
                echo 'Le numero ne doit contenir seulement des chiffres. '."<br />\n";
            }
        }
    }
}