
<?php include "../db.php" ?>
<?php
// function confirm($result){
//     global $connection;
//     if(!$result){
//         die("QUERY FAILED" . mysqli_error($connection));
//     }

//     }
if (isset($_POST['add_category'])){
    $category_title = $_POST['category_title'];
    $category_url = $_POST['category_url'];
    
    $query = "INSERT INTO categories(cat_title, url) ";
    $query .= "VALUES ('{$category_title}', '{$category_url}' )";

    $add_category_query= mysqli_query($connection, $query);

}
    header("Location: http://localhost/webshop/admin/admin_update_category.php");
    die();

?>
                         