<?php

namespace Controllers;

use Services\Database;

Class HomeController extends Database
{
    public function index($loader, $twig)
    {
        $this -> test_connection();
        echo $twig->render('index.html');
    }
}
?>