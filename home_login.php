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
			
			
			

			input[type=text], select, textarea,input[type=password],input[type=email],input[type=number],input[type=date],input[type=text] {
				margin-left:30%;
				text-align:center;
				width: 40%;
				padding: 12px;
				border: 1px solid Black;
				resize: vertical;
				background-color:transparent;
			}

			

			input[type=submit] {
				background-color: #00b300;
				color: white;
				padding: 12px 40px;
				border: none;
			
				cursor: pointer;
				float: left;
				margin-left:30%;
		
			}

			input[type=submit]:hover {
				background-color: #4dff4d;
			}


	.column {
  float: left;
  margin-left:30%;
  width: 25%;
  padding: 10px;
  height: 350px;
 
}



.row:after {
  content: "";
  display: table;
  clear: both;
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
			
			</style>
	</head>
	
	<body class="bg">
      <div >
	
	    
		<ul>
			<li id="title"><h3><div></font><font color="#3ac5ff">L</font><font color="#42bdff">i</font><font color="#4ab5ff">b</font><font color="#52adff">r</font><font color="#5aa5ff">a</font><font color="#639cff">r</font><font color="#6b94ff">y</font><font color="#738cff"> </font><font color="#7b84ff">M</font><font color="#847bff">a</font><font color="#8c73ff">n</font><font color="#946bff">a</font><font color="#9c63ff">g</font><font color="#a55aff">e</font><font color="#ad52ff">m</font><font color="#b54aff">e</font><font color="#bd42ff">n</font><font color="#c53aff">t</font><font color="#ce31ff"> </font><font color="#d629ff">S</font><font color="#de21ff">y</font><font color="#e619ff">s</font><font color="#ef10ff">t</font><font color="#f708ff">e</font><font color="#ff00ff">m</font></div></h3></center>
</li>
		</ul>
	</ul>
		<div class="row">
  <div class="column" style="background-color:transparent;">
   
						
		<h2 style="font-style:italic; font-size:30px;text-align:center;margin-left:30%;">Admin Login</h2>
			
			<form action="home_login_action.php" method = "get">
				<form action="#" autocomplete="off">
						<input type="text"  required  name="userid" autocomplete="off" placeholder="Your Email.." style="width:280px;">
					<h1> </h1>
						<input type="password"  required name="userpass" autocomplete="off" placeholder="Your Password..." style="width:280px;">
					<h1></h1>
					    <input type="submit"  value="Login" style="width:280px;">
						
						
				
			</form>
			</div>
			</div>
			
			<?php
		
		$servername = "localhost";
		$username = "root";
		$password = "";

		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		// Create database
		$sql = "CREATE DATABASE IF NOT EXISTS librarydb";
		if ($conn->query($sql) === TRUE) {
			//echo "Database created successfully";
		}
		$dbname="librarydb";
		$connt = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($connt->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		$sql = "CREATE TABLE IF NOT EXISTS admin_database (
			user_id VARCHAR(50) PRIMARY KEY,
			user_name VARCHAR(50), 
			user_email VARCHAR(50),
			user_password VARCHAR(50)
		)";

		if ($connt->query($sql) === TRUE) {
		//echo "Table admin_database created successfully";
		} else {
		echo "Error creating table: " . $connt->error;
		}
		
		$connt->close();
		$conn->close();
		
		?>
		
	</body>
</html>