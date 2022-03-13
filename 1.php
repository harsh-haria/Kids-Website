<html>
<body>
<?php
$connection = mysqli_connect("localhost","root",""); 
$db = mysqli_select_db($connection,"mydb"); 
if(!$connection)
	{
	die	("failed to connect to databse".mysqli_connect_errno());
	}
if(isset($_POST['b1']))
{
$n1=$_POST['n1'];
$e1=$_POST['e1'];
$n2=$_POST['n2'];
$t1=$_POST['t1'];
$sql = "INSERT INTO feedback (Name,Email,Subject,Feed)
VALUES ('$n1','$e1','$n2','$t1')";
if($connection->query($sql))
{
echo("<p align=center><font color=blue size=9><br><br><br><br>Your responce has been Recorded succesfully....<br>Thank You!!<br><br></font></p>");
echo("<p align=center ><a href=aboutus.html>click here to go to previous page....</a></p>");
}
else
{
	echo("Error:".$sql."<br>".$connection->error);
}
$connection->close();
}
?>