<?php include "../header.php" ?>

<?php include "admin_navbar.php" ?>



<table class = "table table-bordered table-hover" style="margin-top: 100px; ">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>List Price</th>
                                    <th>Brand</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Featured</th>
                                    <th>Sizes</th>
                                    <th>Delete</th>


                                </tr>
                            </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM products ";
                                $select_products = mysqli_query ($connection, $query);
                            
                                while ($row = mysqli_fetch_assoc($select_products)){
                                $product_id = $row['id'];
                                $product_title = $row['title'];
                                $product_price = $row['price'];
                                $product_list_price = $row['list_price'];
                                $product_brand = $row['brand'];
                                $product_category_id = $row['category'];
                                $product_image = $row['image'];
                                $product_description = $row['description'];
                                $product_featured = $row['featured'];
                                $product_sizes = $row['sizes'];
                                    
                                echo "<tr>";
                                echo "<td>$product_id </td>";
                                echo "<td>$product_title </td>";
                                echo "<td>$product_price</td>";
                                echo "<td>$product_list_price</td>";
                                echo "<td>$product_brand</td>";

                                $query = "SELECT * FROM categories WHERE cat_id = {$product_category_id}";
                                $select_categories_id = mysqli_query ($connection, $query);
                                while ($row = mysqli_fetch_assoc($select_categories_id)){
                                $cat_id = $row['cat_id'];
                                $cat_title = $row['cat_title'];
                                echo "<td>$cat_title </td>";
                                }
?>
<form action="admin_remove_product.php" method="get">
<input type="hidden" name="id" value="<?php echo $product_id?>"/>  

<?php
                                echo "<td><img width ='100' src ='$product_image' alt= 'image'</td>";
                                echo "<td style='width:250px'>$product_description </td>";
                                echo "<td>$product_featured </td>";
                                echo "<td>$product_sizes </td>";
                                ?>
                                <td><button class='btn btn-danger btn-sm' id='remove_product' name='remove_product'><i class='fa fa-trash-o'></i></button></td>
                            

</form> 
<?php
                                echo "</tr>";
                            
                            }
                            
                            
                            
                            ?>   
</tbody>

</table>


