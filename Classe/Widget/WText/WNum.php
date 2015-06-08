<?php

namespace PhpWidget\Widget\WText;

class WNum extends WText{
    /**Constructeur**/
    public function __construct($name = 'Num', $bloquage = true, $textDefaut = 'Entrez votre numero de telephone ' ){
        /**Appel du constructeur de l'objet parent (WText)**/
        parent::__construct($bloquage, $textDefaut ,$name);
    }
    /**Fonction Validation du widget**/
    public function valider($val, $widget){
        /**Test si vide et compare avec le booléen blocage**/
        if(empty($val) && $widget->getBloquageWidget() == true){
            echo $widget->getLabelWidget().'Le champs est vide, veuillez le remplir.'."<br />\n";
        }else{ /**Test la longueur du numéro**/
            $long = strlen($val);
            if ($long < 10) {
                echo 'Le numero est trop court. '."<br />\n";
            } else{
                if ($long > 10){
                    echo 'Le numero est trop long. '."<br />\n";
                 }
            }
            /**Test la présence de caractères numériques seulement**/
            if (is_numeric($val) == false) {
                echo 'Le numero ne doit contenir seulement des chiffres. '."<br />\n";
            }
        }
    }
}