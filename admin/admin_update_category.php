<?php include "../header.php" ?>

<?php include "admin_navbar.php" ?>

<form action ="add_category.php" method="post" enctype="multipart/form-data" style= "margin-left: 50px; margin-right: 50px"> 
                                 
                                 
                            <div class="form-group" style= "margin-top: 100px">
                                <label for = "category_title"> Category Title </label>
                                <input class = "form-control" type ="text" name = "category_title">
                            </div>       
                            <div class="form-group">
                                <label for = "category_url"> Category Url</label>
                                <input class = "form-control" type ="text" name = "category_url">
                            </div>       
                            
                            <div class="form-group">
                                <button class ="btn btn-primary" type ="submit" name = "add_category" value= "Add Category"> Add Category</button>
                            </div>  
</form>

<table class = "table table-bordered table-hover" style="margin-top: 100px; ">

                            <thead>
                                <tr>
                                    <th>Category Id</th>
                                    <th>Category Title</th>
                                    <th>Category Url</th>
                                    <th>Delete</th>


                                </tr>
                            </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM categories ";
                                $select_categories = mysqli_query ($connection, $query);
                            
                              
                                while ($row = mysqli_fetch_assoc($select_categories)){
                                $category_id = $row['cat_id'];
                                $category_title = $row['cat_title'];
                                $category_url= $row['url'];
                                

                                    
                                echo "<tr>";
                                echo "<td>$category_id </td>";
                                echo "<td>$category_title </td>";
                                echo "<td>$category_url</td>";
                                ?>                          
<form action="admin_remove_category.php" method="get">
<input type="hidden" name="id" value="<?php echo $category_id?>"/>  


                                <td><button class='btn btn-danger btn-sm' id='remove_product' name='remove_product'><i class='fa fa-trash-o'></i></button></td>
                            <?php
                                echo "</tr>";
                            

                            }
                            
                            
                            ?>

                        </tbody>
</table>
</form>         

