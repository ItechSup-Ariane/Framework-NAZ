<?php

namespace PhpWidget\Widget\Collection;
use PhpWidget\Widget\Widget;

class WReponse extends Widget{
    public function __construct($name = 'Reponse', $bloquage = true, $textDefaut = 'Note :'){
        $code = "<select name=\"select\"><option value=\"1\">1</option> <option value=\"2\" selected>2</option><option value=\"3\">3</option><option value=\"4\">4</option><option value=\"5\">5</option></select>";
        parent::__construct($code, $bloquage, $textDefaut ,$name);
    }

}
