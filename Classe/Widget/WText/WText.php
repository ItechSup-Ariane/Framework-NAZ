<?php
namespace PhpWidget\Widget\WText;

use PhpWidget\Widget\Widget;

/**
* Classe de l'objet WText héritant de l'objet Widget, sert pour tous les widgets de type texte.
*/
class WText extends Widget
{
    /**
    * Méthode constructeur de l'objet WText.
    * @param bloquage Définis si l'absence de valeur dans le champs est bloquant ou non 
    * @param textDefaut Contient la valeur par défaut du champs du widget.
    * @param name Contient le nom du Widget
    */
    public function __construct($bloquage, $textDefaut, $name)
    {
        /**Code HTML du Widget**/
        $code = '<input type="text" name="'. $name . '" placeholder="'. $textDefaut . '" />';
        /**Appel du constructeur de l'objet parent (Widget)**/
        parent::__construct($code, $bloquage, $textDefaut, $name);
    }
    
}
