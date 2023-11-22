<?php

$controllerFile = "Controllers/" . ucwords(strtolower($controller)) . ".php";

if (file_exists($controllerFile)) {
    require_once($controllerFile);
    $controllerInstance = new $controller();

    if (method_exists($controllerInstance, $method)) {
        $controllerInstance->{$method}($params);
    } else {
        showErrorPage();
    }
} else {
    showErrorPage();
}

function showErrorPage()
{
    require_once('Controllers/error.php');
}
