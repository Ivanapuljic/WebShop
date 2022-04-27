<?php include "../db.php";?>
<?php
	session_start();
	if (isset($_POST['add_to_cart'])){
        $id = $_POST['id'];
        $query = "SELECT * FROM products WHERE id={$id}";
        $select_product_query = mysqli_query($connection, $query);
        $product = mysqli_fetch_assoc($select_product_query);
        $product_title1 = $product['title'];
        $product_price1 = $product['price'];
        $product_size = $_POST['size'];
        $product_quantity = $_POST['quantity'];
        $user_id = $_SESSION['user_id'];
        $status= 1;
    
        $query = "INSERT INTO cart(product, price, size, quantity, user_id, status, product_id) ";
        $query .= "VALUES ('{$product_title1}', '{$product_price1}', '{$product_size}', '{$product_quantity}', '{$user_id}', '{$status}', '{$id}')";
    
        $add_to_cart_query= mysqli_query($connection, $query);
    }    

    header("Location: http://localhost/webshop/user/home.php");
    die();
?>