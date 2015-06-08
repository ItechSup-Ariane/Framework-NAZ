<?php
    
namespace PhpWidget;
class Formulaire{
    /**Création du tableau de widget**/   
    private $widgets = array();
    private $titre;
    public function __construct($nom) {
        $this->titre = $nom;
    }
    /** Fonction de rendu**/
    public function render(){
        $str = '<h1>'. $this->titre . '</h1>';
        $str = $str . '<form method="post" name="'. $this->titre .'">';
        foreach($this->widgets as $key =>$widget){
            /**Ajout du code HTML du widget**/
            $str = $str . '</br><label for="'.$key.'">'. $widget->getLabelWidget() . '</label>' . $widget->getCodeWidget();
        }
        /**Bouton submit**/
        $str = $str . '</br><input type="submit" value="Envoyer" /></form>';
        return $str;
    }

    /**Fonction add**/
    public function addWidget($widget, $nom) {
        $widget->setLabelWidget($nom);
        $key = $widget->getNameWidget();
        $this->widgets[$key] = $widget;
        
    }
    public function getWidgets(){
        return $this->widgets;
    }
    public function getTitre(){
        return $this->titre;
    }
    /**Fonction de validation de tout les widget**/
    public function validerWidget($tab){
        if(empty($tab))
        {
            
        } else {
            /**Parcourir les widgets**/
            foreach($this->widgets as $key =>$widget){
                /**$type = get_class($widget);
                switch($type){
                    case 'PhpWidget\Widget\WDate':
                        
                    case 'PhpWidget\Widget\WText\WMail':
                        $this->ValiderMail($tab[$key]);
                    case 'PhpWidget\Widget\WText\WNom':
                        
                    case 'PhpWidget\Widget\WText\WNum':
                        $this->ValiderNum($tab[$key]);
                    case 'PhpWidget\Widget\WText\WUrl':
                        $this->ValiderUrl($tab[$key]);
                }**/
                /**Appel de la fonction de validation du widget séléctionné **/
                $widget->valider($tab[$key], $widget);
            }
        }    
    }
       
}
    
?>