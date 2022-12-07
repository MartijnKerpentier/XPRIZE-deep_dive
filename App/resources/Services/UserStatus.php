<?php

namespace Services;

class UserStatus extends Database
{
    public function __construct()
    {
        if (empty($_SESSION['token'])) {
            $_SESSION['token'] = ['NONE', 1];
        }
    }

    public function index($id)
    {
        $status = false;
        $data = $this->getSpecificUserData($id);
        if (isset($data[0]["Token"])) {
            $token = $data[0]["Token"];
        }
        if ($token == $_SESSION['token'][0]) {
            $status = true;
        }
        return $status;
    }
}