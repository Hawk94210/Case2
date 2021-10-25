<?php

include_once 'Database.php';

class ProductModel
{
    protected $product;

    public function __construct()
    {
        $database = new Database('root', 'smirsakjA2');
        $this->product = $database->connect();
    }

    public function getAll()
    {

        $sql = "SELECT * FROM products";
        $stmt = $this->product->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll();
        return $products;
    }


    public function getById($id)
    {
        $sql = "SELECT * FROM products WHERE id=:id";
        $stmt = $this->product->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $this->product->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function add($name, $sectors, $price, $quantity, $pDate, $pDescription)
    {
        $sql = "INSERT INTO products($name,$sectors,$price,$quantity,$pDate,$pDescription) VALUES (?,?,?,?,?,?)";
        $stmt = $this->product->prepare($sql);
        $stmt->execute([$name, $sectors, $price, $quantity, $pDate, $pDescription]);
    }
}
