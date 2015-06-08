<?php

namespace PhpWidget\Widget;
    /**
    * Class de l'objet Widget
    * @param str Chaîne à afficher
    * @return un booléen valant True si l'affichage c'est bien passé, False sinon
    */
abstract class Widget {
   
    /**Code HTML du Widget contenu dans les différents types de Widget**/
    private $codeWidget;
    /**Définis si l'absence de valeur dans le champs est bloquant ou non (contenu dans les type widget)**/
    private $bloquageWidget;
    private $valeurDefaut;
    private $nameWidget;
    private $labelWidget;
    
    /**
    * Méthode constructeur de l'objet Widget.
    * @param codeWidget Code HTML affecté en fonction du type de widget
    * @param bloquageWidget Définis si l'absence de valeur dans le champs est bloquant ou non 
    * @param valeurDefaut Contient la valeur par défaut du champs du widget.
    * @param nameWidget Contient le nom du Widget
    */
    public function __construct($codeWidget, $bloquageWidget, $valeurDefaut, $nameWidget){
        
        $this->codeWidget = $codeWidget;
        $this->bloquageWidget = $bloquageWidget;
        $this->valeurDefaut = $valeurDefaut;
        $this->nameWidget = $nameWidget;
    }
    
    /**
    * Méthodes d'acesseurs
    */
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
