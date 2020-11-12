<?php
use App\controllers\MenuController;
require __DIR__."/vendor/autoload.php";

$menuController = new MenuController();

$page = isset($_REQUEST['page']) ? ($_REQUEST['page']) : NULL;
switch ($page){
    case 'addMenu':
        $menuController->addMenu();
        break;
        case 'editMenu':
        $menuController->editMenu();
        break;
        case 'delete':
        $menuController->deleteMenu();
        break;
    case "search":
        $menuController->search();
        break;
    default:
        $menuController->showMenu();
        break;

}