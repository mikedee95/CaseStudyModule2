<?php


namespace App\models;


use App\controllers\StaffController;

class StaffModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $stmt = $this->database->prepare("SELECT * FROM staff");
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $staff = new Staff($item['staffName'],$item['staffNumber'],$item['phone'],$item['address']);
            $arr[] = $staff;
            $staff->setId($item['id']);
        }
        return $arr;
    }

    public function add($staff)
    {
        $stmt = $this->database->prepare("INSERT INTO staff (staffName,staffNumber,phone,address) VALUES(:name,:number,:phone,:address)");
        $stmt->bindParam(':name',$staff->getName());
        $stmt->bindParam(':number',$staff->getNumber());
        $stmt->bindParam(':phone',$staff->getPhone());
        $stmt->bindParam(':address',$staff->getAddress());
        $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->database->prepare("DELETE FROM staff WHERE id=:id");
        $stmt->bindParam(':id',$id);
        $stmt->execute();
    }

    public function edit($staff,$id)
    {
        $stmt = $this->database->prepare("UPDATE staff SET staffName=:name,staffNumber=:number,phone=:phone,address=:address WHERE id=:id");
        $stmt->bindParam(':name',$staff->getName());
        $stmt->bindParam(':number',$staff->getNumber());
        $stmt->bindParam(':phone',$staff->getPhone());
        $stmt->bindParam(':address',$staff->getAddress());
        $stmt->bindParam(':id',$id);
        $stmt->execute();
    }

    public function getById($id)
    {
        $stmt = $this->database->prepare("SELECT * FROM staff WHERE id=:id");
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $result = $stmt->fetch();
        $staff = new Staff($result['staffName'],$result['staffNumber'],$result['phone'],$result['address']);
        return $staff;
    }
}