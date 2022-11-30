<?php
include_once("connection.php");



if(!isset($_SESSION['username'])){
   header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link rel="stylesheet" href="style1.css">-->
    <link rel="stylesheet" href="style3.css">
    <title>userpage</title>
</head>
    <body>

        
        
   <div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['username'] ?></span></h1>
      <p>this is an user page</p>
      <a href="login.php" class="btn">Login</a>
      <a href="registration1.php" class="btn">Register</a>
      <a href="logout.php" class="btn">Logout</a>
   </div>

        
        </div>
    </body>
</html>