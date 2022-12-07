<?php

namespace Controllers;

use Services\Database;

Class HomeController extends Database
{
    public function index($loader, $twig)
    {
        $data = $this -> getTasksData();
        echo $twig->render('index.html', ['tasks' => $data, 'user' => $_SESSION['token'][2]]);
    }
}

?>