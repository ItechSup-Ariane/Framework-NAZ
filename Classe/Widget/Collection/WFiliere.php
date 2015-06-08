<?php
namespace PhpWidget\Widget;
use PhpWidget\Widget\Widget;

class WFiliaire extends Widget{
    private $classes = Array();
    
    public function __construct($name = 'Filiaire', $bloquage = true, $textDefaut = 'Classe :'){
        /**ajout de classes en dur**/
        $this->classes[] = 'Informatique';
        $this->classes[] = 'MUC';
        $this->classes[] = 'NRC';
        /**Ouvrir la balise Select**/
        $code = "<select name=\"select\">";
        /**Parcourir le tableau de classes afin d'ajouter des options**/
        foreach($this->classes as $classe){
            $code = $code . "<option value =".$classe.">".$classe."</option>";
        }
        $code = "</select>";    
        parent::__construct($code, $bloquage, $textDefaut ,$name);
    }

}