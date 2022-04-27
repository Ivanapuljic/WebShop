<?php include "../db.php";?>
<?php

function confirm($result){
    global $connection;
    if(!$result){
        die("QUERY FAILED" . mysqli_error($connection));
    }

    }
    session_start();
    if (isset($_POST['checkout'])){
        $user_id = $_SESSION['user_id'];

        $cart_products_q = "SELECT * FROM cart WHERE user_id = {$user_id} and status=1";
        $products_result = mysqli_query ($connection, $cart_products_q);

        $insert_order_q="INSERT INTO orders(user_id) VALUES ('{$user_id}') ";
        $result_q= mysqli_query($connection, $insert_order_q);

        $orderId_q = "SELECT id AS max_id FROM orders ORDER BY id DESC LIMIT 1";
        $orderId_max_result = mysqli_query($connection, $orderId_q);
        $orderId_row = mysqli_fetch_assoc($orderId_max_result);
        
        while($cart_row = mysqli_fetch_assoc($products_result)) {
            $insert_product_order_q = "INSERT INTO product_order(product_id, order_id, size, quantity) VALUES ('{$cart_row['product_id']}', '{$orderId_row['max_id']}', '{$cart_row['size']}', '{$cart_row['quantity']}' )";
            $result_q = mysqli_query($connection, $insert_product_order_q);
            confirm($result_q);
        }

        $query= "UPDATE cart SET status= 0 WHERE user_id= {$user_id} ";
        $change_status_query = mysqli_query($connection, $query);
        header("Location: http://localhost/webshop/user/home.php");
        die();
    }
?>

