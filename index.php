<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 25/09/2018
 * Time: 17:50
 */
require(__DIR__ . "/model/AtmDB.php");
require(__DIR__ . "/model/HitoryTable.php");
require(__DIR__ . "/model/Database.php");
require(__DIR__ . "/model/UserTable.php");
require(__DIR__ . "/controller/AtmController.php");

$controller = new \Controller\AtmController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;

switch ($page) {
    case 'user':
        $controller->user();
        break;
    case 'add':
        $controller->add();
        break;
    case 'index':
        $controller->index();
        break;
    default:
        $controller->login();
        break;
}
?>
