<?php

namespace PhpWidget\Widget;

abstract class Widget {
   

    private $codeWidget;
    private $bloquageWidget;
    private $valeurDefaut;
    private $nameWidget;
    private $labelWidget;
    
    public function __construct($codeWidget, $bloquageWidget, $valeurDefaut, $nameWidget){
        
        $this->codeWidget = $codeWidget;
        $this->bloquageWidget = $bloquageWidget;
        $this->valeurDefaut = $valeurDefaut;
        $this->nameWidget = $nameWidget;
    }
    
    function getCodeWidget() {
        return $this->codeWidget;
    }
    
    function getNameWidget() {
        return $this->nameWidget;
    }
    
    function getBloquageWidget() {
        return $this->bloquageWidget;
    }

    function getValeurDefaut() {
        return $this->valeurDefaut;
    }

    function getLabelWidget() {
        return $this->labelWidget;
    }

    function setCodeWidget($codeWidget) {
        $this->codeWidget = $codeWidget;
    }

    function setBloquageWidget($bloquageWidget) {
        $this->bloquageWidget = $bloquageWidget;
    }

    function setValeurDefaut($valeurDefaut) {
        $this->valeurDefaut = $valeurDefaut;
    }

    function setLabelWidget($labelWidget) {
        $this->labelWidget = $labelWidget;
    }
    
    function setNameWidget($nameWidget) {
        $this->nameWidget = $nameWidget;
    }


}
