<?php
namespace Controllers;

use Services\Database;

class PublishController extends Database
{
    public function index($loader, $twig)
    {
        echo 'this is Publish page!';
    }
}

?>