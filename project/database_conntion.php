<?php
$host='localhost';
$user_name='root';
$password=''; 
$dname='database_conntion';

mysqli_connect($host,$user_name ,$password,$dname);
if($dname)
{
    echo's';
}
else{
    echo'f'; 
}

?>