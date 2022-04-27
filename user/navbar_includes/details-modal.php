<?php
$query = "SELECT * FROM products WHERE featured= '1'";
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

<form action="add_cart.php" method="post">
<input type="hidden" name="id" value="<?php echo $product_id?>"/>  
<div class="modal fade <?php echo $product_id?>" id="<?php echo $product_id?>" tableindex="-1" role="dialog" aria-labelledby="<?php echo $product_id?>" aria-hidden="true">
    <div class= "modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button> 
            <h4 class="modal-title text-center"><?php echo $product_title?></h4>
        </div>
        <div class="modal-body">
            <div class="containter-fluid">
                <div class=row>
                    <div class="col-sm-6">
                        <div class="center-block">
                            <img src="<?php echo $product_image?>" alt="<?php echo $product_title?>" class="details img-responsive" style="width:auto; margin:15px auto; height:500px;"/>                               
                        </div>
                    </div>
                    <div class="col-sm-6">
                    <div style="margin-left:-25px">
                        <h4>Details</h4>
                        <p><?php echo $product_description?></p>
                        <hr />
                        <p>Price: $<?php echo $product_price?></p>
                        <p>Brand: <?php echo $product_brand?></p> 
                        </div>                          
                        <div class="form-group">
                            <div class="col-xs-3">
                                <label for="quantity" id="quantity_label" style="margin-left:-40px">Quantity:</label>
                                <input type="text" class="form-control" id="quantity" name="quantity" style="margin-left:-40px"/>
                            </div><br /><br /><br />
                            <div class="form-group">
                                <label for="size" style="margin-left:-25px">Size:</label>                                     
                                    <select name="size" id="size" class="form-control" style="margin-left:-25px" > 
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                    </select>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-warning" type="submit" id="add_to_cart" name="add_to_cart"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</button>
        </div>
    </div>
</div>
</div>
</form>

<?php
}
?>