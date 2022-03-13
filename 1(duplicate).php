<html>
<body>
<?php
$connection = mysqli_connect("localhost","root",""); 
$db = mysqli_select_db("form1", $connection); 
if(isset($_POST['b1']))
{
$name=$_POST['n1'];
$email=$_POST['e1'];
$sub=$_POST['n2'];
$feed1=$_POST['t1'];
if($name !=''||$email !='')
{
$query = mysqli_query("insert into form1(Name, Email, Subject, Feed) values ('$name', '$email', '$sub', '$feed1')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else
{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysqli_close($connection);
?>
</body>
</html>