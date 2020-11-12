<?php


namespace App\models;


class MenuModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllMenu()
    {
        $stmt = $this->database->prepare("SELECT * FROM menu");
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $menu = new Menu($item['dishcode'],$item['dishname'],$item['priceEach'],$item['dishdesc']);
            $arr[] = $menu;
            $menu->setId($item['id']);
        }
        return $arr;
    }

    public function addMenu($menu)
    {
        $stmt = $this->database->prepare("INSERT INTO menu (dishcode,dishname,priceEach,dishdesc) VALUES(:number,:name,:price,:desc)");
        $stmt->bindParam(':number',$menu->getNumber());
        $stmt->bindParam(':name',$menu->getName());
        $stmt->bindParam(':price',$menu->getPrice());
        $stmt->bindParam(':desc',$menu->getDescription());
        $stmt->execute();
    }

    public function deleteMenu($id)
    {
        $stmt = $this->database->prepare("DELETE FROM menu WHERE id=:id");
        $stmt->bindParam(':id',$id);
        $stmt->execute();
    }

    public function editMenu($menu,$id)
    {
        $stmt = $this->database->prepare("UPDATE menu SET dishcode=:number,dishname=:name,priceEach=:price,dishdesc=:desc WHERE id=:id");
        $stmt->bindParam(':number',$menu->getNumber());
        $stmt->bindParam(':name',$menu->getName());
        $stmt->bindParam(':price',$menu->getPrice());
        $stmt->bindParam(':desc',$menu->getDescription());
        $stmt->bindParam(':id',$id);
        $stmt->execute();
    }

    public function getById($id)
    {
        $stmt = $this->database->prepare("SELECT * FROM menu WHERE id=:id");
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $result = $stmt->fetch();
        $menu = new Menu($result['dishcode'],$result['dishname'],$result['priceEach'],$result['dishdesc']);
        return $menu;
    }
}