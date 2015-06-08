<?php

namespace PhpWidget\Widget\Collection;
use PhpWidget\Widget\Widget;

class WReponse extends Widget{
    public function __construct($name = 'Reponse', $bloquage = true, $textDefaut = 'Note :'){
        $code = "<br><input type=\"radio\" name=\"reponse\" value=\"1\"> 1<br><input type=\"radio\" name=\"reponse\" value=\"2\" checked> 2<br><input type=\"radio\" name=\"reponse\" value=\"3\"> 3<br>";
                parent::__construct($code, $bloquage, $textDefaut ,$name);
    }
    public function valider($val, $widget){
        
    }
}
