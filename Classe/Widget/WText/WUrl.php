<?php
namespace PhpWidget\Widget\WText;


class WUrl extends WText {
    public function __construct($name = 'URL', $bloquage = false, $textDefaut = 'Entrez votre adresse URL '){
        parent::__construct($bloquage, $textDefaut ,$name);
    }
    
    /**Fonction Validation du widget**/
    public function valider($val, $widget){
        /**Test si vide et compare avec le booléen blocage**/
        if(empty($val) && $widget->getBloquageWidget() == true){
            echo $widget->getLabelWidget().'Le champs est vide, veuillez le remplir.'."<br />\n";
        }else{ /**Test si l'url est valide **/
            if (!filter_var($val, FILTER_VALIDATE_URL) === true) {
                echo $val." n'est pas une URL valide"."<br />\n";
            }
        }
    }
    
}
