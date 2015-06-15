<?php

namespace PhpWidget\Widget\WText;

/**
* Classe de l'objet WNum héritant de l'objet WText, qui sert à récupérer un numéro de téléphone.
*/
class WNum extends WText
{
    /**
    * Méthode constructeur de l'objet WNum.
    * @param name Contient le nom du Widget
    * @param bloquage Définis si l'absence de valeur dans le champs est bloquant ou non 
    * @param textDefaut Contient la valeur par défaut du champs du widget.
    */
    public function __construct($name = 'Num', $bloquage = true, $textDefaut = 'Entrez votre numero de telephone ' )
    {
        /**Appel du constructeur de l'objet parent (WText)**/
        parent::__construct($bloquage, $textDefaut ,$name);
    }
    
    /**
    * Méthode de validation de l'objet WNum, test la conformité du numéro.
    * @param val Contient la valeur entrée de le widget WNum.
    * @param widget Contient l'objet widget.
    */
    public function valider($val, $widget)
    {
        /**Test si vide et compare avec le booléen blocage**/
        if (empty($val) && $widget->getBloquageWidget() == true) {
            echo $widget->getLabelWidget().'Le champs est vide, veuillez le remplir.'."<br />\n";
        } else { /**Test la longueur du numéro**/
            $long = strlen($val);
            if ($long < 10) {
                echo 'Le numero est trop court. '."<br />\n";
            } else {
                if ($long > 10) {
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