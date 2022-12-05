<?php
Class HomeController
{
    public function index($loader, $twig)
    {
        echo $twig->render('index.html');
    }
}
?>