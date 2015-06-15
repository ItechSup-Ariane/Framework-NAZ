<?php
namespace PhpWidget\Widget\Collection;

use PhpWidget\Widget\Widget;

/**
* Cette classe est la classe WFiliere permettant la création d'instance du widget filiere hériant de la classe Widget
*/
class WFiliere extends Widget
{
    /**Création d'un tableau de "filières" **/
    private $classes = Array(); 

    public function __construct($name = 'Filiere', $bloquage = true, $textDefaut = 'Classe :')
    {
        /**ajout de filières en dur**/
        $this->classes[1] = 'Informatique';
        $this->classes[2] = 'MUC';
        $this->classes[3] = 'NRC';
        /**Ouvrir la balise Select**/
        $code = "<select name=\"select\">";
        /**Parcourir le tableau de classes afin d'ajouter des options**/
        foreach ($this->classes as $classe) {
            $code = $code . "<option value =".$classe.">".$classe."</option>";
        }
        $code = $code . "</select>";
        /**Appel du constructeur de l'objet widget**/
        parent::__construct($code, $bloquage, $textDefaut ,$name);
    }
    /**Fonction de validation du widget**/
    public function valider($val, $widget)
    {
        
        
    }
}