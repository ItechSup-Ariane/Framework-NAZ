<?php

namespace PhpWidget\Validateur;

    function ValiderNum($num){
        $long = strlen($num);
        if ($long < 10) {
            echo 'Le numero est trop court. ';
        } else{
            if ($long > 10){
                echo 'Le numero est trop long. ';
            }
        }
        if (is_numeric($num) == false) {
            echo 'Le numero ne doit contenir que des chiffres. ';
        }
    }