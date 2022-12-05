<?php
Class ErrorController
{
    public function index($loader, $twig)
    {
        echo $twig->render('404.html');
    }
}
?>