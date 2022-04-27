<?php include "../header.php" ?>
<?php include "../db.php";?>
<?php error_reporting(0); ?>
<?php include "navbar.php";?>
<?php
session_start();
if (isset($_SESSION['user_id'])) {  
    $user_id = $_SESSION['user_id'];
    $query = "SELECT * FROM cart WHERE user_id = {$user_id}";
    $select_all_products_query = mysqli_query ($connection, $query);
 } else {
    // Redirect them to the login page
    header("Location:  http://localhost/webshop");
    die();
}
?>
 
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
                    $product_subtotal= $product_price * $product_quantity;
                    $product_status= $row['status'];
				
					if($product_status== 1){
						$product_total +=$product_subtotal;
                   
  
            ?>
<form action="remove_from_cart.php" method="get">
    <input type="hidden" name="id" value="<?php echo $product_id?>"/> 
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
				<td data-th="Subtotal" class="text-center">$<?php echo $product_subtotal?></td>
				<td class="actions" data-th="">
					<button class="btn btn-danger btn-sm" id="remove_from_cart" name="remove_from_cart"><i class="fa fa-trash-o"></i></button>	
                </td>                         
			</tr>
		</tbody>
</form>	
				<?php } } ?>
	    <tfoot>
		
			<tr>
			<?php if ($product_status ==1){ ?>

				<td><a href="home.php" class="btn btn-warning" ><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
				<td colspan="2" class="hidden-xs"></td>
				<td class="hidden-xs text-center"><strong>Total: $<?php echo $product_total?></strong></td>
				<td><a href="checkout.php" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
			</tr>
				<?php
				}
 else if ($product_status==0){


?>
	<tr>
				<td><a href="home.php" class="btn btn-warning" ><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
				<td colspan="2" class="hidden-xs"></td>
				<td class="hidden-xs text-center"><strong>Total: $<?php echo $product_total?></strong></td>
				<td><a href="checkout.php" class="btn btn-success btn-block" disabled>Checkout <i class="fa fa-angle-right"></i></a></td>
			</tr>
<?php } ?>	
	    </tfoot>
	</table>
</div>
	
