<?php
session_start();
require_once '../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('../public/html');
$twig = new \Twig\Environment($loader);
$url = "$_SERVER[REQUEST_URI]";
$array = explode("/", $url);
/*
 * $C_NAME -> "Class name"
 * $M_NAME -> "Method name"
 *
 * Bepaal welke Class en method worden aangeroepen door if-statement
 */
$status = new \Services\UserStatus();
if($status->index($_SESSION['token'][1])) {
    if (!empty($array[3])) {
        $C_NAME = $array[3];
    } else {
        $C_NAME = "Home";
        $M_NAME = "index";
    }
    $file = "Controllers/{$C_NAME}Controller.php";
    if (file_exists($file)) {
        include $file;
        if (!empty($array[4])) {
            $M_NAME = $array[4];
        } else {
            $M_NAME = 'index';
        }
    } else {
        include("Controllers/ErrorController.php");
        $C_NAME = "Error";
        $M_NAME = "index";
    }
} else {
    if ($array[3] == "Signup") {
        $C_NAME = "Signup";
    } else {
        $C_NAME = "Login";
    }
    include("Controllers/{$C_NAME}Controller.php");
    $M_NAME = "index";
}

$class = 'Controllers\\' . "{$C_NAME}Controller";
$new = new $class();
echo $new -> $M_NAME($loader, $twig);
