<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Admin-Login
    </title>
    <?php
    include 'includes/links.php'
    ?>
</head>
<body>
<div class="container"style ="margin-top :150px">
    <div class="card shadow text-center shadow-lg bg-white rounded p-5">
        <hr>
        <br>
        <h4 class="text-center font weight-bold text-secondary">Admin Login</h4>
        <?php
if(isset($_SESSION['status'])){
    echo '<div class="alert alert-danger text-center font-weight-bold" role="alert">'.$_SESSION['status'].'</div>';
    
    unset($_SESSION['status']);
}

?>
        <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
                <form action = "code.php" method="POST" >
                   <div class="form-group">
                       <input type  ="text" name="admin_name"  class ="form-control" 
                       placeholders="enter username or email">
                     </div>  
              
                   <div class="form-group">
                       <input type  ="password" name="admin_password"  class ="form-control" placeholders="enter pasword">

                     </div> 
                     <button name ="login" class="btn btn-outline-success btn-lg btn-block font-weight-bold" >Submit</button> 
             </form>
            </div>
        </div>
    </div>
</div>




<?php
    include 'includes/footer.php'
    ?>
</body>
</html>