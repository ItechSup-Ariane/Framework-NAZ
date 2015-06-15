<?php

namespace PhpWidget\Widget\Collection;

use PhpWidget\Widget\Widget;

class WReponse extends Widget
{
    /**Constructeur**/
    public function __construct($name = 'Reponse', $bloquage = true, $textDefaut = 'Note :')
    {
        /**Code HTML de l'input radio**/
        $code = "<br><input type=\"radio\" name=\"reponse\" value=\"1\"> 1<br><input type=\"radio\" name=\"reponse\" value=\"2\" checked> 2<br><input type=\"radio\" name=\"reponse\" value=\"3\"> 3<br>";
        /**Appel du constructeur parent**/        
        parent::__construct($code, $bloquage, $textDefaut ,$name);
    }
    /**Validation du widget**/
    public function valider($val, $widget)
    {
        
    }
}
