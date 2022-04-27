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
    <a href="/webshop/home.php" class="navbar-brand" id="text" style="font-size: 30px; color:white;"><b>C&S</b> </a>
    <ul class= "nav navbar-nav">
   
    <li class= "dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size: 17px; color:white;">Clothes <span class="caret"></span></a>
     
      <ul class= "dropdown-menu" role="menu">
      <?php
                                $query = "SELECT * FROM categories";
                                $select_category = mysqli_query ($connection, $query);
                                // confirm($select_categories);
                                while ($row = mysqli_fetch_assoc($select_category)){
                                $category_id = $row['cat_id'];
                                $category_title = $row['cat_title'];
                                $category_url= $row['url'];
                                
?>
        <li> <a href="../<?php echo $category_url?>"><?php echo $category_title?></a> </li>
         
        <?php 

    
}

?> 
      </ul>
  
      </li>
   
    </ul>

  
    <ul class="navbar-right" style="margin-top: 10px; color:black;">
        <li> <a href="../logout.php" id="cart" style="color:white; font-size: 20px; " ><span class="glyphicon glyphicon-log-out"></span> Log Out</a> </li>
    </ul>
    <ul class="navbar-right" style="margin-top: 10px; color:black;">
        <li> <a href="../cart.php" id="cart" style="color:white; font-size: 25px; " ><span class="glyphicon glyphicon-shopping-cart"></span></a> </li>
    </ul>
    
  </div>
</nav>
</body>
</html>