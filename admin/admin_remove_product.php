<?php include "../db.php";?>
<?php
	session_start();
if(isset($_GET['id'])){
    $product_id = $_GET['id'];
    $query = "DELETE FROM products WHERE id = {$product_id}";
    $delete_query= mysqli_query ($connection, $query);
    header("Location: http://localhost/webshop/admin/admin.php");
    die();

}

?>