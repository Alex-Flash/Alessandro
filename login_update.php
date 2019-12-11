<html>
<body>
<?php
$servername="localhost";
$username="username";
$password="password";

//Create connection
$conn=new mysqli('localhost', 'root', '', 'login');
//Check connection
if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

$sql="UPDATE login SET Password='$_POST[Password]' WHERE Username='$_POST[Username]'";
if($conn->query($sql)===TRUE){
	echo("New record updated successfully!");
}else{
	
echo("Error updating record: " . $conn->error);
}

$conn->close();
?>
</body>
</html>
