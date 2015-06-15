<?php
   
namespace PhpWidget;

/**
* Cette Classe est la classe créant le formulaire et contenant les fonctions d'affichage.
*/
class Formulaire
{
    /**Création du tableau de widget**/   
    private $widgets = array();
    private $titre;
    /**
    * Cette fonction est le constructeur de l'objet Formulaire.
    * @param nom indique le nom du questionnaire.
    */
    public function __construct($nom) 
    {
        $this->titre = $nom;
    }
    /**
    * Cette fonction permet la mise en forme du code HTML en parcourant les widgets.
    * @return une chaine de caractère qui contient le code HTML
    */
    public function render()
    {
        $str = '<h1>'. $this->titre . '</h1>';
        $str = $str . '<form method="post" name="'. $this->titre .'">';
        foreach ($this->widgets as $key =>$widget) {
            /**Ajout du code HTML du widget**/
            $str = $str . '</br><label for="'.$key.'">'. $widget->getLabelWidget() . '</label>' . $widget->getCodeWidget();
        }
        /**Bouton submit**/
        $str = $str . '</br><input type="submit" value="Envoyer" /></form>';
        return $str;
    }
    /**
    * Cette fonction ajoute un widget au tableau de widget associé au formulaire
    * @param widget Widget à ajouter
    * @param nom Nom à donner au widget
    */
    public function addWidget($widget, $nom) 
    {
        $widget->setLabelWidget($nom);
        $key = $widget->getNameWidget();
        $this->widgets[$key] = $widget;
    }
    /**
    * Cette fonction est un accesseur qui permet de récuperer l'instance widget.
    */
    public function getWidgets()
    {
        return $this->widgets;
    }
    /**
    * Cette fonction est un accesseur qui permet de récuperer le titre du formulaire.
    */
    public function getTitre()
    {
        return $this->titre;
    }
    /**
    * Cette fonction appel la validation des réponses soumise par le formulaire
    * @param tab tableau contenant les valeurs entrées dans les widget par methode $_POST
    */
    public function validerWidget($tab)
    {
        if (empty($tab)) {
            
        } else {
            /**Parcourir les widgets**/
            foreach ($this->widgets as $key =>$widget) {
                /**Appel de la fonction de validation du widget séléctionné **/
                $widget->valider($tab[$key], $widget);
            }
        }    
    }
       
}
    