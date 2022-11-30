<?php
include_once("connection.php");
$query="select * from registration ";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Dashbpoard</title>
</head>
<body>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sr no</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">Email</th>
        <th scope="col">phone</th>
    </tr>
      <tr>
          <?php
          $i=1;
          $result_set=mysqli_query($connect,$query);
          while($row=mysqli_fetch_assoc($result_set)){
          
          ?>
          
          
      <td><?php echo $row["sr no"]?></td>
        <td><?php echo $row["username"]?></td>
        <td><?php echo $row["password"]?></td>
        <td><?php echo $row["email"]?></td>
          <td><?php echo $row["phone"]?></td>
      </tr>
      <?php
           
              $i++;
          }
              ?> 
  </thead>
  <tbody>
   
   
  </tbody>
</table>


    </body>
</html>    
