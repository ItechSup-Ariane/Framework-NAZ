<?php

namespace PhpWidget\Widget\WText;

/**
* Classe WMail héritant de la classe WText, sert à récupérer une adresse Email.
*/

class WMail extends WText
{
    
    public function __construct($name = 'Email', $bloquage = false, $textDefaut = 'Entrez votre adresse Email')
    {
        parent::__construct($bloquage, $textDefaut ,$name);
    }
    /**
    * Methode de validation du widget WMail, test si l'adresse Email est valide.
    * @param val Contient la valeur entrée dans le widget.
    * @param widget Instance du widget.
    */
    public function valider($val, $widget)
    {
         /**Test si vide et compare avec le booléen blocage**/
        if (empty($val) && $widget->getBloquageWidget() == true) {
            echo $widget->getLabelWidget().'Le champs est vide, veuillez le remplir.'."<br />\n";
        } else {
            
            
        }
    }
}
