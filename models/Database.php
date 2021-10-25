<?php

use PhpMyAdmin\Server\Status\Data;

class Database
{

    public $username;
    public $password;

    public function __construct($username,$password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    function connect()
    {
        try {
            return new PDO('mysql:host=localhost;dbname=QLHHST',$this->username,$this->password);
        } catch (PDOException $e) {
            echo 'loi db';
            exit();
        }
    }
}



