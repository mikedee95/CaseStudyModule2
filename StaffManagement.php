<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])){
    header('location:login.php');
}
?>
<?php

use App\controllers\StaffController;

require __DIR__."/vendor/autoload.php";
$staffController = new StaffController();

$page = isset($_REQUEST['page']) ? ($_REQUEST['page']) : NULL;
switch ($page){
    case 'add':
        $staffController->add();
        break;
    case 'delete':
        $staffController->delete();
        break;
    case 'edit':
        $staffController->edit();
        break;
    default:
        $staffController->show();
        break;
}