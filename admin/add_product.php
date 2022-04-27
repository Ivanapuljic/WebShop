
<?php include "../db.php" ?>
<?php
// function confirm($result){
//     global $connection;
//     if(!$result){
//         die("QUERY FAILED" . mysqli_error($connection));
//     }

//     }
if (isset($_POST['add_product'])){
    $product_title = $_POST['title'];
    $product_price = $_POST['product_price'];
    $product_list_price = $_POST['list_price'];
    $product_brand = $_POST['product_brand'];
    $product_sizes = $_POST['product_sizes'];
    $product_category=$_POST['product_category'];
    $product_image = $_FILES['image']['name'];
    $product_image_temp = $_FILES['image']['tmp_name'];
    $product_featured = $_POST['featured'];
    $product_details = $_POST['product_details'];
  

    move_uploaded_file($product_image_temp, "../images/$product_image");

    $query = "INSERT INTO products(title, price, list_price, brand, category, image, description, featured, sizes) ";
    $query .= "VALUES ('{$product_title}', '{$product_price}', '{$product_list_price}', '{$product_brand}', {$product_category}, '/webshop/images/{$product_image}', '{$product_details}', {$product_featured}, '{$product_sizes}' )";

    $add_product_query= mysqli_query($connection, $query);
    //confirm($add_product_query);

}
    header("Location: http://localhost/webshop/admin/admin_add_product.php");
    die();

?>
                         