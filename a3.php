<?php
$conn=mysqli_connect("localhost","root","root","vcourt");

$a1=$_GET['name'];
$a3=$_GET['exp'];
$a4=$_GET['court'];
$a5=$_GET['email'];
$a6=$_GET['pass'];




$res=mysqli_query("select * from judge where email='$a5'");
$cnt=mysqli_num_rows($res);
if($cnt==0)
{
	$ins="INSERT INTO `judge`(`Name`, `Expierence`, `Court`, `Email`, `Password`)  VALUES ('$a1','$a3','$a4','$a5','$a6')";
	$runn= mysqli_query($conn,$ins); 
	header("location:form5.php?x=2");
}
else
{
	header("location:form5.php?x=1");
}

?>