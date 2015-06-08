<?php
namespace PhpWidget\Widget\Collection;
use PhpWidget\Widget\Widget;

class WFiliere extends Widget{
    private $classes = Array();
    
    public function __construct($name = 'filiere', $bloquage = true, $textDefaut = 'Classe :'){
        /**ajout de classes en dur**/
        $this->classes[1] = 'Informatique';
        $this->classes[2] = 'MUC';
        $this->classes[3] = 'NRC';
        /**Ouvrir la balise Select**/
        $code = "<select name=\"select\">";
        /**Parcourir le tableau de classes afin d'ajouter des options**/
        foreach($this->classes as $classe){
            $code = $code . "<option value =".$classe.">".$classe."</option>";
        }
        $code = "</select>";    
        parent::__construct($code, $bloquage, $textDefaut ,$name);
    }
    public function valider($val, $widget){
        
        
    }
}