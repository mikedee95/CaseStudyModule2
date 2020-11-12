<?php
namespace App\controllers;

use App\models\Staff;
use App\models\StaffModel;

class StaffController
{
    protected $staffModel;

    public function __construct()
    {
        $this->staffModel = new StaffModel();
    }

    public function show()
    {
        $staff = $this->staffModel->getAll();
        include 'src/views/StaffList.php';
    }

    public function add()
    {
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'src/views/add.php';
        } else {
            $name = $_REQUEST['name'];
            $number = $_REQUEST['number'];
            $phone = $_REQUEST['phone'];
            $address = $_REQUEST['address'];
            $staff = new Staff($name,$number,$phone,$address);
            $this->staffModel->add($staff);
            header('location:StaffManagement.php');
        }

    }

    public function delete()
    {
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $this->staffModel->delete($id);
            header('location:StaffManagement.php');
        }
    }

    public function edit()
    {
        if($_SERVER['REQUEST_METHOD']=='GET'){
            $id = $_GET['id'];
            $staff=$this->staffModel->getById($id);
            include_once 'src/views/edit.php';
        }
        else
        {
            $id = $_GET['id'];
            $name = $_POST['name'];
            $number = $_POST['number'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $staff = new Staff($name,$number,$phone,$address);
            $this->staffModel->edit($staff,$id);
            header('location:StaffManagement.php');
        }
    }
}