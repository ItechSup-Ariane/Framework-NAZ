<?php

namespace PhpWidget\Widget;

    /**
    * Classe de l'objet Widget, classe abstraite parente de tous les types de widgets.
    * @param str Chaîne à afficher
    * @return un booléen valant True si l'affichage c'est bien passé, False sinon
    */
abstract class Widget
{
   
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
    public function __construct($codeWidget, $bloquageWidget, $valeurDefaut, $nameWidget)
    {
        
        $this->codeWidget = $codeWidget;
        $this->bloquageWidget = $bloquageWidget;
        $this->valeurDefaut = $valeurDefaut;
        $this->nameWidget = $nameWidget;
    }
    
    /**
    * Cette fonction est un accesseur qui permet de récuperer le code HTML du widget.
    */
    function getCodeWidget()
    {
        return $this->codeWidget;
    }
    /**
    * Cette fonction est un accesseur qui permet de récuperer le nom du widget.
    */
    function getNameWidget()
    {
        return $this->nameWidget;
    }
    /**
    * Cette fonction est un accesseur qui permet de savoir si l'absence de réponse est bloquante pour le widget.
    */
    function getBloquageWidget()
    {
        return $this->bloquageWidget;
    }
    /**
    * Cette fonction est un accesseur qui permet de récuperer la valeur par defaut du widget.
    */
    function getValeurDefaut()
    {
        return $this->valeurDefaut;
    }
    /**
    * Cette fonction est un accesseur qui permet de récuperer le label du widget.
    */
    function getLabelWidget()
    {
        return $this->labelWidget;
    }
    /**
    * Cette fonction est un accesseur qui permet d'attribuer une valeur au code du widget.
    * @param codeWidget Le code à attribuer au widget.
    */
    function setCodeWidget($codeWidget)
    {
        $this->codeWidget = $codeWidget;
    }
    /**
    * Cette fonction est un accesseur qui permet de définir bloquage du widget.
    * @param bloquageWidget Booléen à définissant le bloquage ou non du widget.
    */
    function setBloquageWidget($bloquageWidget)
    {
        $this->bloquageWidget = $bloquageWidget;
    }
    /**
    * Cette fonction est un accesseur qui permet d'attribuer une valeur par défaut au widget.
    * @param valeurDefaut Valeur à attribuer au widget.
    */
    function setValeurDefaut($valeurDefaut)
    {
        $this->valeurDefaut = $valeurDefaut;
    }
    /**
    * Cette fonction est un accesseur qui permet d'attribuer un label au widget.
    * @param labelWidget Label à attribuer au widget.
    */
    function setLabelWidget($labelWidget)
    {
        $this->labelWidget = $labelWidget;
    }
    /**
    * Cette fonction est un accesseur qui permet d'attribuer un nom au widget.
    * @param nameWidget Le nom à attribuer au widget.
    */
    function setNameWidget($nameWidget)
    {
        $this->nameWidget = $nameWidget;
    }
}
