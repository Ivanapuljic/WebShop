<?php include "admin_navbar.php"?>
<br><br>
<?php 
session_start();


    $query1 = "SELECT * FROM orders ";
    $query2 = mysqli_query ($connection, $query1);

    

    while($row2 = mysqli_fetch_assoc($query2)){

    $query3="SELECT * FROM users WHERE user_id= '{$row2['user_id']}'";
    $select_users = mysqli_query ($connection, $query3);
    $row3 = mysqli_fetch_assoc($select_users);
    $username= $row3['username'];
    

    ?>
    
<?php echo "<h3 style=\"padding: 10px;\">Order: {$row2['id']}</h3>"; ?>
<?php echo "<h3 style=\"padding: 10px;\">User:  {$row3['username']} </h3>"; ?>
<table class = "table table-bordered table-hover" >


                            <thead>
                                <tr>
                                    <th>Product Title</th>
                                    <th>Size</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Subtotal</th>                            



                                </tr>
                            </thead>
                        <tbody>
                        
                            <?php
                                $query = "SELECT * FROM product_order WHERE order_id='{$row2['id']}' ";
                                $select_orders = mysqli_query ($connection, $query);
                                $total=0;
                                while ($row = mysqli_fetch_assoc($select_orders)){
                            
                              
                                $order_id = $row['order_id'];
                                $product_id = $row['product_id'];
                                $size= $row['size'];
                                $quantity= $row['quantity'];
                                $query1="SELECT * FROM products where id= {$product_id}";
                                $select_from_products= mysqli_query($connection, $query1);
                                $row1=mysqli_fetch_assoc($select_from_products);
                                $price= $row1['price'];
                                $title=$row1['title'];
                                $subtotal= $price*$quantity;
                                $total +=$subtotal;


                                

                                    
                                echo "<tr>";
                                echo "<td>$title </td>";
                                echo "<td>$size </td>";
                                echo "<td>$quantity</td>";
                                echo "<td>$$price</td>";
                                echo "<td>$$subtotal</td>";
                                



                                }
                               ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                <td colspan="4" class="hidden-xs"></td>
                                <td style="float:center;"><b>Total: $<?php echo $total; ?></b></td>
                                </tr>
                                </tfoot>
                   
                                </table> 
                         <?php   }
                                
                                ?> 
