<?php
namespace PhpWidget\Widget\WText;
use PhpWidget\Widget\Widget;
class WText extends Widget{
    
    public function __construct($bloquage, $textDefaut, $name){
        
        $code = '<input type="text" name="'. $name . '" placeholder="'. $textDefaut . '" />';
        parent::__construct($code, $bloquage, $textDefaut, $name);
    }
    
}
