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
		
		$sql = "CREATE TABLE IF NOT EXISTS issue_database (
			usn VARCHAR(50),
			book_id VARCHAR(50),
			date VARCHAR(30)
			)";

		if ($conn->query($sql) === TRUE) {
		//echo "Table admin_database created successfully";
		} else {
		echo "Error creating table: " . $conn->error;
		}
		
		
		$bookid = filter_input(INPUT_GET,'bookid');
		$usn = filter_input(INPUT_GET,'usn');
		$date = filter_input(INPUT_GET,'date');
		
		$sql1 = "SELECT * FROM issue_database WHERE usn='$usn'";
		$res = $conn->query($sql1);

		if ($res->num_rows < 3) {
		
		
		
			$sql1 = "SELECT * FROM book_database WHERE book_id='$bookid' AND qty>0";
			$result = $conn->query($sql1);

			if ($result->num_rows > 0) {
				$sql = "INSERT INTO issue_database (book_id, usn, date) 
				VALUES ('$bookid','$usn','$date')";
			
				if ($conn->query($sql) === TRUE) {
				$sql2 = "UPDATE book_database SET qty=qty-1 WHERE book_id='$bookid'";
				$resul = $conn->query($sql2);
				
				//echo "New record created successfully";
				echo "<div id='card'><h1>New Book is borrowed successfully...</h1><form action='admin_home.php'><button type='submit' id='done'>Done</button></form></div>";
		
		
				} else {
				//echo "<div id='card'><h1>Book ID is already taken!!!!</h1><form action='add_books.php'><button type='submit' id='done'>ok</button></form></div>";
				}

			
			}
		
			else {
				echo "<div id='card'><p>Book is not there!!!</p><form action='admin_home.php' method='get'><button type='submit' id='done'>Done</button></form></div>";
		
			}
		}
		else
		{
			echo "<div id='card'><h1>Already 3 Books are taken....</h1><form action='admin_home.php'><button type='submit' id='done'>Done</button></form></div>";
		}

		$conn->close();
		
		?>
		
		</body>
	
	
	


</html>




<?php
	/*$sql="SELECT COUNT(*) AS 'cnt' FROM issue_database WHERE usn='$usn'";
	$conn->query($sql)*/
?>
	