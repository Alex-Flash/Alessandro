<html>
	<head>
		<style>
		.bg{
			background-image:url("image/books3.jpg");
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
	
	<body class="bg">
	
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
		
		$sql = "CREATE TABLE IF NOT EXISTS book_database (
			book_id VARCHAR(50) PRIMARY KEY,
			book_name VARCHAR(50), 
			aut_name VARCHAR(50),
			pub VARCHAR(50),
			qty INT(11)
		)";

		if ($conn->query($sql) === TRUE) {
		//echo "Table admin_database created successfully";
		} else {
		echo "Error creating table: " . $conn->error;
		}
		
		$bookid = filter_input(INPUT_GET,'bookid');
		$bookname = filter_input(INPUT_GET,'bookname');
		$autname = filter_input(INPUT_GET,'autname');
		$pub = filter_input(INPUT_GET,'pub');
		$qty = filter_input(INPUT_GET,'qty');


		$sql = "INSERT INTO book_database (book_id, book_name, aut_name, pub,qty) 
		VALUES ('$bookid', '$bookname','$autname','$pub','$qty')";


		if ($conn->query($sql) === TRUE) {
		//echo "New record created successfully";
		echo "<div id='card'><h1>New Book added is successfully....</h1><form action='admin_home.php'><button type='submit' id='done'>Done</button></form></div>";
		
		
		} else {
			echo "<div id='card'><h1>Book ID is already taken!!!!</h1><form action='add_books.php'><button type='submit' id='done'>ok</button></form></div>";
		}

		$conn->close();
		
		?>
		
		</body>
	
	
	


</html>