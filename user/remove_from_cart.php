<?php include "../db.php";?>
<?php
	session_start();
	if (isset($_GET['id'])){
            $product_id = $_GET['id'];
            $query = "DELETE FROM cart WHERE id = {$product_id} ";
            $delete_query = mysqli_query ($connection, $query);
            header("Location: cart.php");
            die();
        }
?>