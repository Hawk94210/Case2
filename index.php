<?php
include_once 'views/header.php';
include_once 'models/Database.php';
include_once 'models/ProductModel.php';
include_once 'controllers/ProductController.php';
$product = new ProductController;

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $action = $_REQUEST['action'];
    $id = $_REQUEST['id'];
    switch ($action) {
        case 'delete':
            $product->deleteData($id);
            break;
        case 'add':
            include_once 'views/AddProduct.php';
            break;
        default:
            $products = $product->getAll();
            break;
    }
}
?>
<table class='table container'>
    <thead>
        <tr>
            <td>#</td>
            <td>Tên hàng</td>
            <td>Loại hàng</td>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $key => $product) { ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $product['name'] ?></td>
                <td><?php echo $product['sectors'] ?></td>
                <td><a href="index.php?action=delete&id=<?php echo $key + 1 ?>"><button type="button" class="btn btn-danger">DELETE</button></a></td>
                <td><a href=""><button type="button" class="btn btn-warning">EDIT</button></a></td>
                <td><a href="index.php?action=add"><button type="button" class="btn btn-success">ADD</button></a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php include_once 'views/footer.php' ?>