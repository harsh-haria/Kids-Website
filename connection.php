<html>
<body>
<?php
$dbconnect=mysqli_connect("localhost","root","","form1");
if(mysqli_connect_errno($dbconnect))
	{
	echo"failed to connect to databse"
	}
else{
echo"<font color=red size=9>response registered</font>"
}
?>
</body>
</html>