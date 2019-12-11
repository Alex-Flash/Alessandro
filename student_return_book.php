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
		
		$bookid = filter_input(INPUT_GET,'bookid');
		$usn = filter_input(INPUT_GET,'usn');
		$rdate = filter_input(INPUT_GET,'date');
		
		$sql1 = "SELECT * FROM issue_database WHERE usn='$usn'";
		$res = $conn->query($sql1);

		if ($res->num_rows > 0) {
		
		
		
		$sql1 = "SELECT date FROM issue_database WHERE usn='$usn' AND book_id='$bookid'";
		$res = $conn->query($sql1);
		$row = mysqli_fetch_array($res);
		$ldate = $row['date'];
		
		$x=date_create($ldate);
		$t=date_create($rdate);
		$dat=date_diff($x,$t);
		$aa= $dat->format("%a");
		$aaa= $dat->format("%R");
		
		
		$_SESSION["bookid"] = $bookid;
		$_SESSION["usn"] = $usn;
		
		
		if($aaa=='+')
		{
			echo "<div id='card'><h1>Fine : Rs ".$aa."</h1><form action='ret.php'><button type='submit' id='done'>pay</button></form><form action='admin_home.php'><button type='submit' id='done'>Cancel</button></form></div>";
		}
		else{
			
			$sql = "DELETE FROM issue_database WHERE usn='$usn' AND book_id='$bookid'";
			if ($conn->query($sql) === TRUE) {
				$sql2 = "UPDATE book_database SET qty=qty+1 WHERE book_id='$bookid'";
				$resul = $conn->query($sql2);
				echo "<div id='card'><p>Book Returned successfully</p><form action='student_home.php' method='get'><button type='submit' id='done'>ok</button></form></div>";
			} else {
				//echo "Error deleting record: " . $conn->error;
			}
		}
		}
		else
		{
			echo "<div id='card'><p>No book for Return</p><form action='student_home.php' method='get'><button type='submit' id='done'>ok</button></form></div>";
		}
		
		
		$conn->close();
		
		?>
		
		</body>

</html>




