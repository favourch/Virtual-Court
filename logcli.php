<?php
session_start();
$conn=mysqli_connect("localhost","root","root","vcourt");

$a1=@$_GET[email];
$a2=@$_GET[pass];


$gp="select * from client where Email='$a1' and Password='$a2'";
$res=mysqli_query($conn,$gp);
$cnt=mysqli_num_rows($res);
if($cnt==1)
{
	$_SESSION[email]=$a1;
	header("location:clientlogin.php");
}
else
{
	header("location:form555.php?x=3");
}
?>