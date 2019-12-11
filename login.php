<html>
<body>
<?php
function login($Username, $Password){
$conn = new mysqli('localhost', 'root', '', 'login');
if ($conn->connect_error){
die("connection failed:" . $conn->connect_error);
}

$sql="SELECT * FROM login WHERE Username='$Username' AND Password='$Password'";
$res = $conn->query($sql);
if($res->num_rows >0) {
header('Location: ./student_home.php');
} else {
return "Entered Username or Password is incorrect";
}
return null;
}
$error = null;
if ($_SERVER["REQUEST_METHOD"]=="POST"){
$Username = $_POST['Username'];
$Password = $_POST['Password'];
		
if(empty($Username) || empty($Password)){
$error = "Please fill the form before submitting.";
}
if($error == null){
$error = login($Username, $Password);
}
}
echo $error;
?>
</body>
</html>