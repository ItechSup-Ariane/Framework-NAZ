<?php


namespace PhpWidget\Widget;
use PhpWidget\Widget\Widget;
class WDate extends Widget{
    
    public function __construct($name = 'Date', $bloquageWidget = true, $valeurDefaut = '01/01/2015'){
        $code = '<input type="date" name="' . $name . '"/>';
        parent::__construct($code, $bloquageWidget, $valeurDefaut, $name);

    }
  
}
