<?php


namespace App\controllers;
use App\models\Menu;
use App\models\MenuModel;

class MenuController
{
    public $menuModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }

    public function showMenu()
    {

        $menu = $this->menuModel->getAllMenu();
        include_once 'src/views/MenuList.php';
    }

    public function addMenu()
    {
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'src/views/addMenu.php';
        } else {
            $number = $_REQUEST['number'];
            $name = $_REQUEST['name'];
            $price = $_REQUEST['price'];
            $description = $_REQUEST['desc'];
            $menu = new Menu($number,$name,$price,$description);
            $this->menuModel->addMenu($menu);
            header('location:MenuManagement.php');
        }

    }

    public function deleteMenu()
    {
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $this->menuModel->deleteMenu($id);
            header('location:MenuManagement.php');
        }
    }

    public function editMenu()
    {
        if($_SERVER['REQUEST_METHOD']=='GET'){
            $id = $_GET['id'];
            $menu = $this->menuModel->getById($id);
            include_once 'src/views/editMenu.php';
        }
        else
        {
            $id = $_GET['id'];
            $number = $_POST['number'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['desc'];
            $menu = new Menu($number,$name,$price,$description);
            $this->menuModel->editMenu($menu,$id);
            header('location:MenuManagement.php');
        }
    }

}