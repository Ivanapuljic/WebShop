<?php include "db.php"; ?>

<?php session_start(); ?>
<?php
if (isset ($_POST['login'])){
 $username = $_POST['username'];
 $password = $_POST['password'];

 $username = mysqli_real_escape_string($connection, $username);
 $password = mysqli_real_escape_string($connection, $password);

$query = "SELECT * FROM users WHERE username = '{$username}' ";
$select_user_query = mysqli_query ($connection, $query);
if(!$select_user_query){
    die ("QUERY FAILED" . mysqli_error ($connection));
}

while ($row = mysqli_fetch_array($select_user_query)) {
    $db_id = $row['user_id'];
    $db_username = $row['username'];
    $db_user_password = $row['user_password'];
    $db_user_firstname = $row['user_firstname'];
    $db_user_lastname = $row['user_lastname'];
    $user_role= $row['role'];
}
if($username !== $db_username && $password !== $db_user_password){
    header("Location: index.php");
}
else if ($username == $db_username && $password == $db_user_password && $user_role != 'admin'){
   $_SESSION['username'] = $db_username;
   $_SESSION['firstname'] = $db_user_firstname;
   $_SESSION['lastname'] = $db_user_lastname;
   $_SESSION['user_id'] = $db_id;

    header ("Location: /webshop/user/home.php");
}
else if ($username == $db_username && $password == $db_user_password && $user_role== 'admin'){
    $_SESSION['username'] = $db_username;
    $_SESSION['firstname'] = $db_user_firstname;
    $_SESSION['lastname'] = $db_user_lastname;
    $_SESSION['user_id'] = $db_id;
    header ("Location: /webshop/admin/admin.php");


}

}
if (isset($_POST['create_user'])){
    // $user_id = $_POST['user_id'];
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $username = $_POST['username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_address = $_POST['user_address'];
    $user_city=$_POST['city'];
    $user_post_number=$_POST['post_number'];

   

    $query = "INSERT INTO users(user_firstname, user_lastname, username, user_email, user_password, user_address, city, post_number) ";
    $query .= "VALUES ('{$user_firstname}', '{$user_lastname}',  '{$username}', '{$user_email}',  '{$user_password}', '{$user_address}', '{$user_city}', '{$user_post_number}'  )";

    $create_user_query= mysqli_query($connection, $query);
    header ("Location: /webshop/user/home.php");
}
 ?>
