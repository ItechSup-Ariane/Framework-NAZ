<?php

namespace PhpWidget\Widget\WText;

/**
* Classe de l'objet WUrl héritant de l'objet WText, qui sert à récupérer une URL.
*/
class WUrl extends WText
{
    /**
    * Méthode constructeur de l'objet WUrl.
    * @param bloquage Définis si l'absence de valeur dans le champs est bloquant ou non 
    * @param textDefaut Contient la valeur par défaut du champs du widget.
    * @param name Contient le nom du Widget
    */
    public function __construct($name = 'URL', $bloquage = false, $textDefaut = 'Entrez votre adresse URL ')
    {
        parent::__construct($bloquage, $textDefaut ,$name);
    }
    
    /**
    * Méthode de validation de l'objet WUrl, test si l'url est valide.
    * @param val Contient la valeur entrée de le widget WUrl
    * @param widget Contient l'objet widget
    */
    public function valider($val, $widget)
    {
        /**Test si vide et compare avec le booléen blocage**/
        if (empty($val) && $widget->getBloquageWidget() == true) {
            echo $widget->getLabelWidget().'Le champs est vide, veuillez le remplir.'."<br />\n";
        } else { /**Test si l'url est valide **/
            if (!filter_var($val, FILTER_VALIDATE_URL) === true) {
                echo $val." n'est pas une URL valide"."<br />\n";
            }
        }
    }
    
}
