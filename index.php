<?php
require_once('./Config/config.php');
require_once('./Helpers/Helpers.php');

$url = $_GET['route'] ?? 'Start/start';
$arrUrl = explode('/', $url);
$controller = $arrUrl[0];
$method = isset($arrUrl[1]) && $arrUrl[1] !== '' ? $arrUrl[1] : $controller;
$params = '';

if (count($arrUrl) > 2) {
    $params = implode(',', array_slice($arrUrl, 2));
}
$params = rtrim($params, ',');

require_once('Libraries/Core/Autoload.php');
require_once('Libraries/Core/Load.php');
