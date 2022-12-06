<?php

namespace Controllers;

use Services\Database;

Class LoginController extends Database
{
    public int $id;

    public function index($loader, $twig)
    {
        echo $twig->render('login_example.html');
        if (!empty($_POST)) {
            $correct = $this->checkUserData($_POST['Username'], $_POST['Password']);
            $this->feedback($correct);
        }
    }

    private function checkUserData($username, $password)
    {
        $correct = false;
        $data = $this->getUserData();
        foreach ($data as $row) {
            if ($row['Username'] == $username && $row['Password'] == $password) {
                $correct = true;
                $this->id = $row['id'];
            }
        }
        return $correct;
    }

    private function feedback($correct)
    {
        if ($correct) {
            $token = $this->generateRandomString(10);
            $this->updateUserToken($token, $this->id);
            $_SESSION['token'] = [$token, $this->id];
            header('Location: http://localhost/XPRIZE-deep_dive/App');
        } else {
            $_SESSION['token'] = [false, 1];
            echo 'Incorrect ';
        }
    }

    private function generateRandomString($length)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
?>