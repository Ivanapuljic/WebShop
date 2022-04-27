<?php include "../db.php"?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>C&S</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  </head>
<body>

<nav class= "navbar navbar-default navbar-fixed-top" id="navbar"  style="background-color: #000000;" >
  <div class="container" >
    <a href="/webshop/admin/admin.php" class="navbar-brand" id="text" style="font-size: 30px; color:white;"><b>C&S</b> </a>
    

  
    <ul class="navbar-right" style="margin-top: 10px; color:black;">
        <li> <a href="../logout.php" id="cart" style="color:white; font-size: 20px; " ><span class="glyphicon glyphicon-log-out"></span> Log Out</a> </li>
    </ul>
    <ul class="navbar-right" style="margin-top: 10px; color:black;">
        <li> <a href="all_orders.php" id="orders" style="color:white; font-size: 17px; " >Orders</a> </li>
    </ul>
    <ul class="navbar-right" style="margin-top: 10px; color:black;">
        <li> <a href="admin_add_product.php" id="add_product" style="color:white; font-size: 17px; " >Add Product</a> </li>
    </ul>
    <ul class="navbar-right" style="margin-top: 10px; color:black;">
        <li> <a href="admin_update_category.php" id="add_product" style="color:white; font-size: 17px; " >Add Category</a> </li>
    </ul>
 
    
  </div>
</nav>
</body>
</html>