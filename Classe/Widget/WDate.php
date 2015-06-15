<?php

namespace PhpWidget\Widget;

use PhpWidget\Widget\Widget;

/**
* Classe contenant le widget de type Date heritant de Widget, sert à récupérer une date.
*/
class WDate extends Widget
{
    /**
    * Constructeur de l'objet WDate.
    * @param name Nom associé au WDate
    * @param bloquageWidget Définis si le champs doit absolument être remplis.
    * @param valeurDefaut Indique la valeur par defaut associé au champs du WDate.
    */
    public function __construct($name = 'Date', $bloquageWidget = true, $valeurDefaut = '01/01/2015')
    {
        $code = '<input type="date" name="' . $name . '"/>';
        /**
        * Appel du constructeur parent de l'objet Widget
        * @param code Code HTML du Widget.
        * @param bloquageWidget Définis si le champs doit absolument être remplis.
        * @param valeurDefaut Indique la valeur par defaut associé au champs.
        * @param name Nom associé a l'instance
        */
        parent::__construct($code, $bloquageWidget, $valeurDefaut, $name);
    }
}
