<?php

/**
 * Author Deshayes Gary
 * Bootstrap microframework.
 */

//Utilise le namespace Classe
use Classe as classe; 
//Permet de charger les classes automatiquement
require 'classe/Autoloader.php';
classe\Autoloader::Register();
//Classe abstraite de récuperation de route
include 'Request.php';
//Initilisation des controllers
include 'Controller/ControllerAbstract.php';
include 'Controller/IndexController.php';
include 'Controller/BackOfficeController.php';
//Container de l'injection de dépendances
include 'ContainerInterface.php';
include 'Container.php';
$container = new Container();
$db = new classe\Database();
$container->add('database', $db);

$request = Request::getInstance();

$controller = $request->get('controller', 'index');
$className = UCFirst($controller).'Controller';

$rendered = false;

if (file_exists(sprintf('Controller/%s.php', $className))) {
    if (class_exists($className)) {
        $controller = new $className();
        $action = $request->get('action', 'index');
        if ($action && method_exists($controller, $action)) {
            $controller->$action();
            $rendered = true;
        }
    }
}

if (!$rendered) {
    $controller = new IndexController();
    $controller->notfound();
}
