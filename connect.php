<?php
$a=$_POST["n"];
$b=$_POST["a"];
$c=$_POST["ad"];
$d=$_POST["e"];
$e=$_POST["s"];
$f=$_POST["r"];
$g=$_POST["ci"];
$h=$_POST["co"];

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'hotel');
$sql=("insert into code(n,a,ad,e,s,r,ci,co) values('$a','$b','$c','$d','$e','$f','$g','$h')");
echo("Room Booked Successfully.......");
include('booking.php');
mysqli_close($con);
?>