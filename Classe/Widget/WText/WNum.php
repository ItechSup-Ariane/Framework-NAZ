<?php

namespace PhpWidget\Widget\WText;

class WNum extends WText{
    
    public function __construct($name = 'Num', $bloquage = true, $textDefaut = 'Entrez votre numéro de téléphone ' ){
        parent::__construct($bloquage, $textDefaut ,$name);
    }
}
