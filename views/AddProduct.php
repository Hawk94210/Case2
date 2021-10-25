<?php 
include_once 'header.php';
include_once '../models/Database.php';
include_once '../models/ProductModel.php';
include_once '../controllers/ProductController.php';

$name = $_REQUEST['name'];
$sectors = $_REQUEST['sectors'];
$price = $_REQUEST['price'];
$quantity = $_REQUEST['quantity'];
$pDate = $_REQUEST['pDate'];
$pDescription = $_REQUEST['pDescription'];

$product = new ProductController;
$product->addData($name, $sectors, $price, $quantity, $pDate, $pDescription);

?>
<form class='container'>
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name='name'>
  </div>
  <label>Sectors</label>
    <input type="text" class="form-control" name='sectors'>
  </div>
  <label>Price</label>
    <input type="text" class="form-control" name='price'>
  </div>
  <label>Quantity</label>
    <input type="text" class="form-control" name='quantity'>
  </div>
  <label>Date</label>
    <input type="text" class="form-control" name='pDate'>
  </div>
  <label>Description</label>
    <input type="text" class="form-control" name='pDescription'>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <?php header("Location:index.php")  ?>
</form>

<?php include_once 'footer.php' ?>