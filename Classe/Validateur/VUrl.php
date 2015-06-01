<?php

namespace PhpWidget\Validateur;

    function ValiderUrl($url){
        if ($url == ''){
            echo 'L URL est vide';
        } else {
            if (!filter_var($url, FILTER_VALIDATE_URL) === true) {
                echo("$url n'est pas une URL valide");
            } 
        }
    }

