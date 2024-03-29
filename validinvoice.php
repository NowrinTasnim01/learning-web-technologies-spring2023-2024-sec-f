<?php
session_strat();
$iteam=$_REQUEST['iteam'];
$pd=$_REQUEST['pd'];
$quantity=$_REQUEST['quantity'];
$price=$_REQUEST['price'];
$payment=$_REQUEST['payment'];

    echo "Iteam No:-$iteam";
    echo"<br>";
    echo "product discription:- $pd";
    echo "<br>";
    echo "quantity:- $quantity";
    echo "<br>";
    echo "price:-$price";
    echo "<br>";
    echo "payment:-$payment";
    
    


?>