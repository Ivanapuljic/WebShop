<?php include "../header.php" ?>
<?php include "../db.php";?>
<?php error_reporting(0); ?>
<?php
session_start();
if (isset($_SESSION['user_id'])) {  
    $user_id = $_SESSION['user_id'];
    $query = "SELECT * FROM cart WHERE user_id = {$user_id}";
    $select_all_products_query = mysqli_query ($connection, $query);
    $query1= "SELECT * FROM users WHERE user_id = {$user_id}";
    $select_all_users_query= mysqli_query ($connection, $query1);
 } else {
    // Redirect them to the login page
    header("Location:  http://localhost/webshop");
    die();
}
?>
<?php include "navbar.php";?>

<div class="row">
  <div class="col-75">
    <div class="container">
        <div class="row">
          <div class="col-50">

            <?php
            while ($row = mysqli_fetch_assoc($select_all_users_query)){
            ?>
            <div style="margin-top:100px;">
            <label for="fname"><i class="fa fa-user"></i> First Name: </label> <?php echo $row['user_firstname']?><br>
            <label for="fname"><i class="fa fa-user"></i> Last Name:</label> <?php echo $row['user_lastname']?> <br>
            <label for="email"><i class="fa fa-envelope"></i> Email:</label> <?php echo $row['user_email']?> <br>
            <label for="adr"><i class="glyphicon glyphicon-home"></i> Street Name and Number:</label> <?php echo $row['user_address']?> <br>
            <label for="city"><i class="fa fa-institution"></i> City:</label> <?php echo $row['city']?> <br>
            <label for="zip"><i class="glyphicon glyphicon-envelope"></i> Post Number:</label> <?php echo $row['post_number']?> <br>
            </div>
          </div>
           <?php } ?>

        </div>
    </div>
</div>
<form action="buy.php" method="post">
<input type="hidden" name="id" value="<?php echo $product_id?>"/>  
  <div class="col-25">
    <div class="container">
     <table id="cart" class="table table-hover table-condensed" style="margin-top:55px">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
                            <th style="width:8%">Size</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>

                <?php
                while ($row = mysqli_fetch_assoc($select_all_products_query)){
                    $product_id= $row['id'];
                    $product_title =$row['product'];
                    $product_price= $row['price'];
                    $product_quantity=$row['quantity'];
                    $product_size= $row['size'];
                    $product_subtotal1= $product_price * $product_quantity;
                    $product_status= $row['status'];
                    
                    if($product_status== 1){
                    $product_total1 +=$product_subtotal1;  
                ?>

					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-10">
										<h4 class="nomargin"><?php echo $product_title?></h4>
									</div>
								</div>
							</td>
							<td data-th="Price">$<?php echo $product_price?></td>
                            <td data-th="Quantity"><?php echo $product_quantity?></td>
                            <td data-th="Size"><?php echo $product_size?></td>
							<td data-th="Subtotal" class="text-center">$<?php echo $product_subtotal1?></td>				
						</tr>
					</tbody>					
</form>
<?php }}
?>			                     
	</table>
            <div class="modal-footer">
                 <p><b>Total: $<?php echo $product_total1 ?> </b> </p>
                <button class="btn btn-success btn-block" type="submit" id="checkout" name="checkout" onclick="return resultForm()" style="float:right; width:150px;">Buy</button>
            </div>
						
			<script>
            function resultForm(){
             alert("Successfully ordered!");
            }
            </script>
    </div>
  </div>
</div>

