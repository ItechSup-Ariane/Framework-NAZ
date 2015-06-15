<?php

namespace PhpWidget\Widget\WText;

class WNom extends WText
{
    
    public function __construct($name = 'Nom', $bloquage = true, $textDefaut = 'Entrez votre Nom ')
    {
        parent::__construct($bloquage, $textDefaut ,$name);
    }
}
