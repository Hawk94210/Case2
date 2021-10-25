<?php
include_once '../models/Database.php';
include_once '../models/ProductModel.php';


class ProductController{

    public $pdo;

    function __construct()
    {
        $this->pdo = new ProductModel;
    }

    function getAll(){
        $product = $this->pdo->getAll();
        return $product;
    }

    function deleteData($id){
        $product = $this->pdo->delete($id);
        return $product;
    }

    function addData($name, $sectors, $price, $quantity, $pDate, $pDescription){
        $product = $this->pdo->add($name, $sectors, $price, $quantity, $pDate, $pDescription);
        include_once 'views/AddProduct.php';
    }
}