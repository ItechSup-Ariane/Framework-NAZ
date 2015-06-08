<?php
namespace PhpWidget\Widget\WText;
use PhpWidget\Widget\Widget;
class WText extends Widget{
    /**Constructeur de l'objet WText**/
    public function __construct($bloquage, $textDefaut, $name){
        /**Code HTML du Widget**/
        $code = '<input type="text" name="'. $name . '" placeholder="'. $textDefaut . '" />';
        /**Appel du constructeur de l'objet parent (Widget)**/
        parent::__construct($code, $bloquage, $textDefaut, $name);
    }
    
}
