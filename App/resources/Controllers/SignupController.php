<?php

namespace Controllers;

use http\Message;
use mysql_xdevapi\Schema;
use Services\Database;

Class SignupController extends Database
{
    public bool $UserExsit = false;

    public function index($loader, $twig)
    {
        $data = $this -> getTasksData();
        if (empty($_POST)) {
            echo $twig->render('Signup.html');
        }
        if (!empty($_POST))
        {
            $this->check($_POST['Username']);
            if (!$this->UserExsit) {
                $this->NewUser($_POST['Username'], $_POST['Password']);
                echo $twig->render('Signup.html', ["Message"=>"Bedankt voor het registreren 🎉"]);
            } else {
                echo $twig->render('Signup.html', ["Message"=>"Deze gebruikersnaam bestaat al 😞"]);
            }
        }
    }

    public function check($Username)
    {
        $data = $this->getUserData();
        foreach ($data as $row) {
            if ($row['Username'] == $Username) {
                $this->UserExsit = true;
            }
        }
    }



}

?>