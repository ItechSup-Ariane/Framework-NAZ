<?php
namespace PhpWidget\Widget\WText;


class WUrl extends WText {
    public function __construct($name = 'URL', $bloquage = false, $textDefaut = 'Entrez votre adresse URL '){
        parent::__construct($bloquage, $textDefaut ,$name);
    }
}
