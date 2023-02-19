<?php

include 'security.php';

if(isset($_POST['login'])){
   
    $name = $_POST['admin_name'];
    $password = $_POST['admin_password'];

    $query = "SELECT * FROM admin WHERE username = '$name' or email = '$name'";
    $query_run = mysqli_query($connection,$query);
    $count = mysqli_num_rows($query_run);

    if($count > 0)
    {
       $row = mysqli_fetch_assoc($query_run);
      if(password_verify($password,$row['password']))
      {
        $_SESSION['admin_id'] = $row['id'];
        $_SESSION['admin_name'] = $row['username'];
        header('Location: index.php');
      }
      else{
        $_SESSION['status'] = "Password Not Matched";
        header('Location: login.php');
      }

    }
    else{
        $_SESSION['status'] = "Admin Account Doesn't Exist";
        header('Location: login.php');
    }
    
}


?>