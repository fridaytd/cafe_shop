<?php

namespace MVC\Models;
use PDO;
class Product
{
    private $pdo;
    private $table_name = 'products';

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllProducts()
    {
        $stmt = $this->pdo->query("SELECT * FROM {$this->table_name}");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$this->table_name} WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addProduct($name, $description, $price, $image_path)
    {
        $stmt = $this->pdo->prepare("INSERT INTO {$this->table_name} (name, description, price, image_path) VALUES (:name, :description, :price, :image_path)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':image_path', $image_path);
        return $stmt->execute();
    }

    public function updateProduct($id, $name, $description, $price, $image_path)
    {
        $stmt = $this->pdo->prepare("UPDATE {$this->table_name} SET name=:name, description=:description, price=:price, image_path=:image_path WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':image_path', $image_path);
        return $stmt->execute();
    }

    public function deleteProduct($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM {$this->table_name} WHERE id=:id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}