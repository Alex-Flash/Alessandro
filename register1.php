<html>
<body>
<?php
$servername="localhost";
$username="username";
$password="password";

//Create connection
$conn=new mysqli('localhost', 'root', '', 'register1');
//Check connection
if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

$sql="INSERT INTO details1 (Fname,Std_no,Lname,Address,Contact) VALUES('$_POST[Fname]','$_POST[Std_no]','$_POST[Lname]','$_POST[Address]','$_POST[Contact]')";
if($conn->query($sql)===TRUE){
	print("New record created successfully!");
}else{
	
print("Error: " . $sql . "<br>" . $conn->error);
}

$conn->close();
?>
</body>
</html>
