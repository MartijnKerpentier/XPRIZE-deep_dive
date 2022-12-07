<?php

namespace Controllers;

use Services\Database;

Class LoginController extends Database
{
    public int $id;

    public function index($loader, $twig)
    {
        if (empty($_POST)) {
            echo $twig->render('login.html', [
                'url' => 'http://localhost/XPRIZE-deep_dive/App',
            ]);
        }
        if (!empty($_POST)) {
            $correct = $this->checkUserData($_POST['Username'], $_POST['Password']);
            $this->feedback($correct, $loader, $twig);
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

    private function feedback($correct, $loader, $twig)
    {
        if ($correct) {
            $token = $this->generateRandomString(10);
            $data = $this->getSpecificUserData($this->id);
            $this->updateUserToken($token, $this->id);
            $_SESSION['token'] = [$token, $this->id, $data[0]['Username']];
            header('Location: http://localhost/XPRIZE-deep_dive/App');
        } else {
            echo $twig->render('login.html', [
                'url' => 'http://localhost/XPRIZE-deep_dive/App',
                'Message' => "Is gebruikersnaam of wachtwoord onjuist?🤔"
            ]);
            $_SESSION['token'] = ['NONE', 1];
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