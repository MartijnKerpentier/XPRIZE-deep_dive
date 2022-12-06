<?php

namespace Controllers;

use Services\Database;

Class LoginController extends Database
{
    public function index($loader, $twig)
    {
        echo $twig->render('login_example.html');
        var_dump($_POST);
    }
}
?>