<?php
include_once("connection.php");


 
if(isset($_POST['submit'])){
    $username=mysqli_real_escape_string($connect,$_POST['username']);
        $password=mysqli_real_escape_string($connect,$_POST['password']);


    
    
    
$query="insert into login (USERNAME,PASSWORD) values('$username','$password')";
mysqli_query($connect,$query);


}



if(isset($_POST['username']) && ($_POST['password'])){
    
    $username=mysqli_real_escape_string($connect,$_POST['USERNAME']);
        $password=mysqli_real_escape_string($connect,$_POST['PASSWORD']);
    
    $query1="select * from registration where USERNAME='$username' && PASSWORD ='$password'";
        $result_set=mysqli_query($connect,$query1);
    $count=mysqli_num_rows($result_set);
    if($count>0){
        $row=mysqli_fetch_assoc($result_set);
        
        $_SESSION['USERNAME']=$row['$username'];
        header('location:index.php');
        
    }
    else{
        $msg="*please enter correct login details";
    }
}
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style1.css">
            


    <title>Document</title>
</head>


	
<body>
    <form action="index.php" method="post">
  <center>
    <div class="form">
        <div class="title">Login</div>

        <div class="input_container in1">
            <input name="username" class="input" type="text" placeholder=" " />

            
            <label for="Username" class="placeholder">Username</label>
        </div>

        <div class="input_container in2">
            <input name="password" class="input" type="password" placeholder=" " />

            <label for="password" class="placeholder">Password</label>
            
        </div>

        <button name="submit" class="submit" >LOGIN</button>
            
        
       

        <td><p>Not yet a Member? <a href="registration1.php">Register</a></p></td>
        
        
    </div>
  </center>
    </form>
</body>
</html>