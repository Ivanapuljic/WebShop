<?php include "navbar.php";?>
<?php include 'details-modal.php';  ?>
<body>
<!-- remove the spaces and center the products -->
<div class="col-md-2"></div>
<!-- main content of featured products -->
<div class="col-md-8">
  <div class="row">
    <h2 class="text-center">Products</h2>

<?php
 $query = "SELECT * FROM products WHERE category=1";
 $select_all_products_query = mysqli_query ($connection, $query);
 while ($row = mysqli_fetch_assoc($select_all_products_query)){
    $product_id= $row['id'];
    $product_title =$row['title'];
    $product_price= $row['price'];
    $product_list_price= $row['list_price'];
    $product_brand= $row['brand'];
    $product_categories= $row['category'];
    $product_image= $row['image'];
    $product_description= $row['description'];
    $product_featured= $row['featured'];
    $product_sizes= $row['sizes'];
?>

      <div class= "col-md-3" style="margin-bottom:50px;">
        <h4><?php echo $product_title ?></h4>
        <img src= "<?php echo $product_image ?>" alt="<?php echo $product_title?>" id="images" style="width:auto;height:200px;a" />
        <p class= "list-price text-danger">List Price: $<s><?php echo $product_list_price?></s></p>
        <p class="price">Our Price: $<?php echo $product_price ?></p>
        <button type="button" class="btn " data-toggle="modal" data-target="#<?php echo $product_id?>" style="background-color:black; color:white">Details</button>
      </div>

<?php } ?>
  
</div>
</div>

<?php include "../footer.php";?>
