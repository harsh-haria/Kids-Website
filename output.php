<html>
<body>
<?php
$sn = "localhost";
$un = "root";
$pass = "";
$db = "mydb";
$connection = new mysqli($sn, $un, $pass, $db);
if ($connection->connect_error) 
{
    die("Connection failed: " . $connection->connect_error);
} 

$sql = "SELECT n1,e1,n2,t1 FROM feedback";
$result = $connection->query($sql);

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
	{
		echo("<br> name: ".$row["n1"]." - email: ".$row["e1"]." - subject: "$row["n2"]." - feedback: ".$row["t1"]."<br>");
    }
} else {
    echo "0 results";
}
$connection->close();
?> 
</body>
</html>