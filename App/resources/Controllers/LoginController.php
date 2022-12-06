<?php

namespace Controllers;

use Services\Database;

Class LoginController extends Database
{
    public function index($loader, $twig)
    {
        echo $twig->render('login_example.html');
        $correct = $this->checkUserData($_POST['Username'], $_POST['Password']);
        $this->feedback($correct);

    }

    private function checkUserData($username, $password)
    {
        $correct = false;
        $data = $this->getUserData();
        foreach ($data as $row) {
            if ($row['Username'] == $username && $row['Password'] == $password) {
                $correct = true;
            }
        }
        return $correct;
    }

    private function feedback($correct)
    {
        if ($correct) {
            header('Location: http://localhost/XPRIZE-deep_dive/App');
        } else {
            echo 'Incorrect ';
        }
    }
}
?>