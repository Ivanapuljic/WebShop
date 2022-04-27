<?php include "../db.php";?>
<?php
	session_start();
if(isset($_GET['id'])){
    $category_id = $_GET['id'];
    $query = "DELETE FROM categories WHERE cat_id = {$category_id}";
    $delete_query= mysqli_query ($connection, $query);
    header("Location: http://localhost/webshop/admin/admin_update_category.php");
    die();

}

?>