<?php include "../header.php" ?>

<?php include "admin_navbar.php" ?>

<form action ="add_product.php" method="post" enctype="multipart/form-data" style= "margin-left: 50px; margin-right: 50px"> 
                            <div class="form-group" style= "margin-top: 100px">
                                <label for = "title"> Product Title </label>
                                <input class = "form-control" type ="text" name = "title">
                            </div>          
                            <div class="form-group">
                            <select name="product_category" id="">
                               <?php
                                $query = "SELECT * FROM categories";
                                $select_category = mysqli_query ($connection, $query);
                                // confirm($select_categories);
                                while ($row = mysqli_fetch_assoc($select_category)){
                                $category_id = $row['cat_id'];
                                $category_title = $row['cat_title'];
                                echo "<option value='$category_id'>{$category_title}</option>";

                                }

                               ?>
                               </select>
                            </div>           
                            <div class="form-group">
                                <label for = "product_price"> Price </label>
                                <input class = "form-control" type ="text" name = "product_price">
                            </div>       
                            <div class="form-group">
                                <label for = "list_price"> List Price </label>
                                <input class = "form-control" type ="text" name = "list_price">
                            </div>       
                            <div class="form-group">
                                <label for = "image"> Product Image </label>
                                <input type ="file" name = "image">
                            </div>    
                            <div class="form-group">
                                <label for = "product_brand"> Product Brand </label>
                                <input class = "form-control" type ="text" name = "product_brand">
                            </div>  
                            <div class="form-group">
                                <label for = "product_sizes"> Product Sizes </label>
                                <input class = "form-control" type ="text" name = "product_sizes">
                            </div>    
                            <div class="form-group">
                            <select name="featured" id="">
                            <option value="0">0</option>
                            <option value="1">1</option>
                               </select>
                            </div>  
                            <div class="form-group">
                                <label for = "product_details"> Details </label>
                                <textarea class = "form-control" name = "product_details" id="" cols="30" rows="10"> </textarea>
                            </div>  
                            <div class="form-group">
                                <button class ="btn btn-primary" type ="submit" name = "add_product" value= "Add Product"> Add Product</button>
                            </div>  
</form>