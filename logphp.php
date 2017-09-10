<?php
$db="renewme";
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,$db);
$bg1=$_REQUEST['email'];
$bg3=$_REQUEST['pass'];
$sql2="select * from nameuser where '$b1'=email and '$b3'=password";
$result=mysqli_query($con,$sql2);
if($result<=0)
{
	header('index.html');
}
else
{
	$sql1="select flag from registration where email='$b1'";
}
?>
