<?php

namespace PhpWidget\Widget\WText;

/**
* Classe de l'objet WNom héritant de l'objet WText, qui sert à récupérer une chaine courte de caractère (Nom/Prénom).
*/
class WNom extends WText
{
    /**
    * Méthode constructeur de l'objet WNom.
    * @param name Contient le nom du Widget
    * @param bloquage Définis si l'absence de valeur dans le champs est bloquant ou non 
    * @param textDefaut Contient la valeur par défaut du champs du widget.
    */
    public function __construct($name = 'Nom', $bloquage = true, $textDefaut = 'Entrez votre Nom ')
    {
        parent::__construct($bloquage, $textDefaut ,$name);
    }
    /**
    * Méthode de validation de l'objet WNom, test la conformité du Nom/Prénom.
    * @param val Contient la valeur entrée de le widget WNum.
    * @param widget Contient l'objet widget.
    */
     public function valider($val, $widget)
    {
         
    }
}
