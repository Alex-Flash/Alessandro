<?php
session_start();
?>
<html>
	<head>
		<style>
		.bg{
			background-image:url("image/books2.jpg");
			height:100%;
			background-position:center;
			background-repeat:no-repeat;
			background-size:100%;
			opacity:0.8;
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
			
		</style>
	</head>
	
	<body class='bg' >
	
		<ul>
			<li id="title"><strong>Library Management System</strong></li>
		</ul>
		
		
<?php
		
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
		
		$bookid = $_SESSION["bookid"];
		$usn = $_SESSION["usn"];
		
			$sql = "DELETE FROM issue_database WHERE usn='$usn' AND book_id='$bookid'";
			if ($conn->query($sql) === TRUE) {
				$sql2 = "UPDATE book_database SET qty=qty+1 WHERE book_id='$bookid'";
				$resul = $conn->query($sql2);
				echo "<div id='card'><p>Book Returned successfully</p><form action='admin_home.php' method='get'><button type='submit' id='done'>ok</button></form></div>";
			} else {
				//echo "Error deleting record: " . $conn->error;
			}
		

		$conn->close();
		
		?>
		
		</body>

</html>




