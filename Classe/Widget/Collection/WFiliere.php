<?php
namespace PhpWidget\Widget\Collection;

use PhpWidget\Widget\Widget;

/**
* Classe WFiliere héritant de la classe Widget, qui sert à récupérer un filière d'apres une liste.
*/
class WFiliere extends Widget
{
    /**Création d'un tableau de "filières" **/
    private $filieres = Array(); 
    /**
    * Méthode constructeur de l'objet WFiliere.
    * @param name Nom du widget
    * @param bloquageWidget Définis si l'absence de valeur dans le champs est bloquant ou non 
    * @param textDefaut Contient la valeur par défaut du champs du widget.
    */
    public function __construct($name = 'Filiere', $bloquage = true, $textDefaut = 'Filiere')
    {
        /**ajout de filières en dur**/
        $this->filieres[1] = 'Informatique';
        $this->filieres[2] = 'MUC';
        $this->filieres[3] = 'NRC';
        /**Ouvrir la balise Select**/
        $code = "<select name=\"select\">";
        /**Parcourir le tableau de filieres afin d'ajouter des options**/
        foreach ($this->filieres as $filiere) {
            $code = $code . "<option value =".$filiere.">".$filiere."</option>";
        }
        $code = $code . "</select>";
        /**Appel du constructeur de l'objet widget**/
        parent::__construct($code, $bloquage, $textDefaut ,$name);
    }
    /**
    * Méthode de validation du WFiliere
    * @param val Contient la valeur entrée dans le widget.
    * @param widget Instance du widget.
    */
    public function valider($val, $widget)
    {
    }
}