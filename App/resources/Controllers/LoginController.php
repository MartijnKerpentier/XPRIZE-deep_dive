<?php

namespace Controllers;

use Services\Database;

Class HomeController extends Database
{
    public function index($loader, $twig)
    {
        echo $twig->render('login_example.html');
    }
}
?>