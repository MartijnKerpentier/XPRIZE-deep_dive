<?php
namespace Controllers;

use Services\Database;

class PublishController extends Database
{
    public function index($loader, $twig)
    {
        $data = $this -> getTasksData();
        echo $twig->render('add.html', ['title' => $data[0]['Title']]);
        if (!empty($_POST)) {
            $this -> insertNewTask($_POST['title'], $_POST['description'], $_POST['publisher'], $_POST['points'], $_POST['img_url']);
        }
        
    }

}

?>