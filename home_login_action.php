<?php
session_start();
?>

<html>
	<head>
		<style>
		.bg{
			background-image:url("image/books1.jpg");
			height:100%;
			background-position:center;
			background-repeat:no-repeat;
			background-size:100%;
			opacity:0.8;
		}
		
		#card{
				background-color:#FFFFEF;
				margin:150px;
				height:150px:
				border-radius:5px;
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
				text-align:center;
				font-size:24px;
				padding:25px;
				margin-left:200px;
				margin-right:200px;
			}
			
			#done{
				background-color: #00b300;
				color: white;
				padding: 12px 20px;
				border: none;
				border-radius: 4px;
				cursor: pointer;
			
			}
			ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: transperent;
			}
		
		
		
		
		#title {
			float:left;
			font-size:24pt;
			color:Black;
			background-color:white;
			}
			
		</style>
	</head>
	
	<body class="bg">
	<ul>
	
	<li id="title"><strong>Library Management System</strong></li>
	</ul>
		
<?php
		$userid = filter_input(INPUT_GET,'userid');
		$userpass = filter_input(INPUT_GET,'userpass');
		
		if($userid=="Admin" && $userpass=="admin123")
		{
			header("Location: admin_home.php");
			$_SESSION["userid"] = $userid;
			
		}
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname ="librarydb";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM admin_database WHERE user_id='$userid' AND user_password='$userpass'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			header("Location: admin_home.php");
			$_SESSION["userid"] = $userid;
			
		}
		
		 else {
			echo "<div id='card'><p>Invalid Id or Password!!!</p><p>Try again with valid Id and Password</p><form action='home.php' method='get'><button type='submit' id='done'>Done</button></form></div>";
		
		}
?>

</body>
	
	

</html>