<?php

namespace Controllers;

use Services\Database;

Class UserController extends Database
{
    public function index($loader, $twig)
    {
        $data = $this -> getTasksData();
        echo $twig->render('User.html');
    }
}

?>