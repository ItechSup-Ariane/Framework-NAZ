<?php
    spl_autoload_register(function ($class) {

    // project-specific namespace prefix
    $prefix = 'PhpWidget\\';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/Classe/';

    // does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // no, move to the next registered autoloader
        return;
    }

    // get the relative class name
    $relative_class = substr($class, $len);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});
    use PhpWidget\Formulaire; 
    $fTest = new Formulaire('Questionnaire Test');
    $test1 = new PhpWidget\Widget\WText\WNum('numTel');
    $fTest->addWidget($test1,'Numero Test : ');
    $test2 = new PhpWidget\Widget\WText\WUrl('Url');
    $fTest->addWidget($test2, 'Url Test : ');
    $test3 = new PhpWidget\Widget\WText\WMail('mail');
    $fTest->addWidget($test3, 'Mail Test : ');
    
    $test4 = new PhpWidget\Widget\Collection\WReponse('reponse');
    $fTest->addWidget($test4, 'Reponse test : ');
    
    $test = $fTest->render();
    echo $test;
    $tab = array();
    $tab = $_POST;
    $fTest->validerWidget($tab);
    var_dump($_POST);
    
?>
