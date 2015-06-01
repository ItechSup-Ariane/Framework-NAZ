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
            $str = $str . '</br><label for="'.$key.'">'. $widget->getLabelWidget() . '</label>' . $widget->getCodeWidget();
        }
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
    public function validerWidget($tab){
        if(empty($tab))
        {
            
        } else {
            foreach($this->widgets as $key =>$widget){
                $type = get_class($widget);
                switch($type){
                    case 'PhpWidget\Widget\WDate':
                        
                    case 'PhpWidget\Widget\WText\WMail':
                        $this->ValiderMail($tab[$key]);
                    case 'PhpWidget\Widget\WText\WNom':
                        
                    case 'PhpWidget\Widget\WText\WNum':
                        $this->ValiderNum($tab[$key]);
                    case 'PhpWidget\Widget\WText\WUrl':
                        $this->ValiderUrl($tab[$key]);
                }
            }
            
        }   
        
    }
    /**Validation**/
    function ValiderNum($num){
        $long = strlen($num);
        if ($long == '') {
            echo 'Le numero est vide. ';
        } else {
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
    }
    
    
    function ValiderUrl($url){
        if (empty($url){
            echo 'L URL est vide';
        } else {
            if (!filter_var($url, FILTER_VALIDATE_URL) === true) {
                echo("$url n'est pas une URL valide");
            }    
        }
    }
    /**test**/
    function ValiderMail($mail){
        
    }

    
}
    
?>