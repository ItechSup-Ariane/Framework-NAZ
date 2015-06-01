<?php

namespace PhpWidget\Widget\WText;
/**
$bloquageWidget = false;**/

class WMail extends WText{
    
    public function __construct($name = 'Email', $bloquage = false, $textDefaut = 'Entrez votre adresse Email'){
        parent::__construct($bloquage, $textDefaut ,$name);
    }
}
