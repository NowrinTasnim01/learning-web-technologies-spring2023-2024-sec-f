<?php
session_start();
$dob=$_REQUEST['dob'];
$title=$_REQUEST['title'];
$jdetail=$_REQUEST['jdetail'];
$ded=$_REQUEST['ded'];

echo"date:-$dob";
echo"<br>";
echo"Job Title:-$title";
echo"<br>";
echo"Job Details:-$jdetail";
echo"<br>";
echo"Dedline:-$ded";

?>