<?php

    session_start();

   if(!isset($_SESSION['flag'])){
        header('location: login.php');
   }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
        <h1>Welcome To Quick Eagle Courier Service</h1>
      

        
</body>
</html>