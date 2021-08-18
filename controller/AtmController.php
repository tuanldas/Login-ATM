<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 26/09/2018
 * Time: 08:57
 */

namespace Controller;

use mondel\Amount;
use mondel\AtmDB;
use mondel\Database;

class AtmController
{
    public $postDB;

    public function __construct()
    {
        $connection = new Database();
        $this->postDB = new AtmDB($connection->connect());
    }

    public function index()
    {
        $posts = $this->postDB->getAll();
        include 'view/list.php';
    }

    public function user()
    {
        $posts = $this->postDB->getAllUser();
        include 'view/user.php';
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include "view/login.php";
        } else {
            $resurl = $this->postDB->login($_POST['username'], $_POST['password']);
            if ($resurl == "success") {
                header("Location: index.php?page=index");
            } elseif ($resurl == "password") {
                header("HTTP/1.0 401 Not Found");
            } elseif ($resurl == "username") {
                header("Location: index.php");
            } else {
                header("HTTP/1.0 405 Not Found");
            }
        }
    }


    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/add.php';
        } else {
            $date = date('Y-m-d H:i:s');
            $this->postDB->createTransaction($_POST['user1'], $_POST['amount'], $_POST['user2'], $date, $_POST['content']);
            header("Location: index.php?page=index");
        }
    }
}