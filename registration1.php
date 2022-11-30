<?php
include_once("connection.php");

if(isset($_POST['submit'])){
    $username=mysqli_real_escape_string($connect,$_POST['username']);
        $password=mysqli_real_escape_string($connect,$_POST['password']);
$email=mysqli_real_escape_string($connect,$_POST['email']);
    $contact=mysqli_real_escape_string($connect,$_POST['phone']);

$query="insert into registration (username,password,email,phone) values('$username','$password','$email','$contact')";
mysqli_query($connect,$query);


}
 


?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
  <title>Register</title>
   <script>                                
        function validateForm()
    {
    var x=document.getElementById("username").value;
    var str=/^[A-Za-z]{2,20}$/;
    var x1=document.getElementById("email").value;
    var str1=/^A-Za-z0-9_#.]+@[A-Za-z]+.[a-z]{2,4}$/
    var x2=document.getElementById("password").value;
    var str2=/^[0-9]{6,6}$/;
    var x3=document.getElementById("phone").value;
    var str3=/^[0-9]$/;
    if(!x.match(str))
        {
            document.getElementById("err").innerHTML="It should contain only letters from A-Z or a-z and atleast 2 or atmost 20 charachters";
        }
        else{
            document.getElementById("err1").innerHTML="";
        }
        else{
            document.getElementById("err2").innerHTML="";
        }
    }
        
    </script>
    
</head>
<body>
   <center>
       <form name="regform" method="post" >
    <div class="form">
        <div class="title">Register</div>
        
        <div class="input_container in1">
            <input name="username" class="input" type="text" placeholder=" " id="un"/>

            
            <label for="Username" class="placeholder">Username</label>
        </div>

        <div class="input_container in2">
            <input name="password" class="input" type="password" placeholder=" " id="pwd" />

            <label for="password" class="placeholder">Password</label>
        </div>

        <div class="input_container in3">
            <input name="email" class="input" type="email" placeholder=" " id="email"/>

            <label for="email" class="placeholder" >Email</label>
        </div>
        
        <div class="input_container in4">
            <input name="phone" class="input" type="text" placeholder="+91******* " id="phone"/>

            <label for="phone" class="placeholder">Phone</label>
        </div>

        <button input name="submit" class="submit" type="submit" onclick="validateForm()">SUBMIT</button>


        <p>Already a user? <a href="login.php">Login Here</a></p>
        
    </div>
      </form>
  </center>
</body>
</html>