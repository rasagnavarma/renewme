<?php
$db="renewme";
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,$db);
$bg1=$_REQUEST['fname'];
$bg2=$_REQUEST['email'];
$bg3=$_REQUEST['pass'];
$bg4=$_REQUEST['lname'];
$sql2="INSERT INTO nameuser(usname,email,password,us2name) VALUES ('$bg1','$bg2','$bg3','$bg4')";
$result=mysqli_query($con,$sql2);
if($result)
{
	header("location:reg.html");
}
else
{
	echo mysqli_error($con);
}
?>
