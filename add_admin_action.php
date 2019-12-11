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
			
				
		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: transperent;
			}
		
		
		
		
		#title {
			float:left;
			font-size:20pt;
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
			<li id="title"><h3><div></font><font color="#3ac5ff">L</font><font color="#42bdff">i</font><font color="#4ab5ff">b</font><font color="#52adff">r</font><font color="#5aa5ff">a</font><font color="#639cff">r</font><font color="#6b94ff">y</font><font color="#738cff"> </font><font color="#7b84ff">M</font><font color="#847bff">a</font><font color="#8c73ff">n</font><font color="#946bff">a</font><font color="#9c63ff">g</font><font color="#a55aff">e</font><font color="#ad52ff">m</font><font color="#b54aff">e</font><font color="#bd42ff">n</font><font color="#c53aff">t</font><font color="#ce31ff"> </font><font color="#d629ff">S</font><font color="#de21ff">y</font><font color="#e619ff">s</font><font color="#ef10ff">t</font><font color="#f708ff">e</font><font color="#ff00ff">m</font></div></h3></center>
</li>
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
		
		$sql = "CREATE TABLE IF NOT EXISTS admin_database (
			user_id VARCHAR(50) PRIMARY KEY,
			user_name VARCHAR(50), 
			user_email VARCHAR(50),
			user_password VARCHAR(50)
		)";

		if ($conn->query($sql) === TRUE) {
		//echo "Table admin_database created successfully";
		} else {
		echo "Error creating table: " . $conn->error;
		}
		
		$userid = filter_input(INPUT_GET,'userid');
		$username = filter_input(INPUT_GET,'username');
		$email = filter_input(INPUT_GET,'email');
		$userpass = filter_input(INPUT_GET,'userpass');
		


		$sql = "INSERT INTO admin_database (user_id, user_name, user_email, user_password) 
		VALUES ('$userid', '$username','$email', '$userpass')";


		if ($conn->query($sql) === TRUE) {
		//echo "New record created successfully";
		echo "<div id='card'><h1>New admin added is successfully....</h1><form action='admin_home.php'><button type='submit' id='done'>Done</button></form></div>";
		
		
		} else {
			echo "<div id='card'><h1>Admin ID is already taken!!!!</h1><form action='add_admin.php'><button type='submit' id='done'>ok</button></form></div>";
			}

		$conn->close();
		
		?>
		
		</body>
	
	
	


</html>