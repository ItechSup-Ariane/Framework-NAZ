<?php

namespace PhpWidget\Widget\Collection;

use PhpWidget\Widget\Widget;

/**
* Classe de l'objet WReponse héritant de l'objet Widget, qui sert à récupérer un choix (Radio).
*/
class WReponse extends Widget
{
    /**
    * Méthode constructeur de l'objet WReponse.
    * @param name Contient le nom du Widget
    * @param bloquage Définis si l'absence de valeur dans le champs est bloquant ou non 
    * @param textDefaut Contient la valeur par défaut du champs du widget.
    */
    public function __construct($name = 'Reponse', $bloquage = true, $textDefaut = 'Note :')
    {
        /**Code HTML de l'input radio**/
        $code = "<br><input type=\"radio\" name=\"reponse\" value=\"1\"> 1<br><input type=\"radio\" name=\"reponse\" value=\"2\" checked> 2<br><input type=\"radio\" name=\"reponse\" value=\"3\"> 3<br>";
        /**Appel du constructeur parent**/        
        parent::__construct($code, $bloquage, $textDefaut ,$name);
    }
    /**
    * Méthode de validation de l'objet WReponse, vérifie le choix.
    * @param val Contient la valeur entrée de le widget WNum.
    * @param widget Contient l'objet widget.
    */
    public function valider($val, $widget)
    {
        
    }
}
