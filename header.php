<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['usermail'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<div class="container">
   <div class="content">
  
   
      <h1>Welcome!</h1>
      <p><i style="color: blue;">Thanks For Visiting.</i></p>
      <p>your email : <span><?php echo $_SESSION['usermail']; ?></span></p>
      <a href="logout.php" class="logout">logout</a>
   </div>
</div>

</body>
</html>