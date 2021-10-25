<?php
include_once 'header.php';
?>
<table class='table'>
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
                    <td><?php echo $key +1 ?></td>
                    <td><?php echo $product['name'] ?></td>
                    <td><?php echo $product['sectors'] ?></td>
                    <td><a href=""><button type="button" class="btn btn-danger">DELETE</button></a></td>
                    <td><a href=""><button type="button" class="btn btn-warning">EDIT</button></a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php include_once 'footer.php'; ?>