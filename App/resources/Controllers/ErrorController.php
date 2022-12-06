<?php

namespace Controllers;

Class ErrorController
{
    public function index($loader, $twig)
    {
        echo $twig->render('404.html', ['url' => 'http://localhost/XPRIZE-deep_dive/App']);
    }
}
?>