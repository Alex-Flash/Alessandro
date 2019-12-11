<html>
        <head>
		<meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .btn{
            margin-left: 10px;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="card" style="margin-top: 10px;margin-bottom: 10px;">
                    <div class="card-body">
        <style>
            .bg{
			background-image:url("image/books4.jpg");
			height:100%;
			background-position:center;
			background-repeat:no-repeat;
			background-size:100%;
			opacity:0.8;
		}	 
        </style>
         </head>
    <body class="bg">		
<h3><div></font><font color="#3ac5ff">L</font><font color="#42bdff">i</font><font color="#4ab5ff">b</font><font color="#52adff">r</font><font color="#5aa5ff">a</font><font color="#639cff">r</font><font color="#6b94ff">y</font><font color="#738cff"> </font><font color="#7b84ff">M</font><font color="#847bff">a</font><font color="#8c73ff">n</font><font color="#946bff">a</font><font color="#9c63ff">g</font><font color="#a55aff">e</font><font color="#ad52ff">m</font><font color="#b54aff">e</font><font color="#bd42ff">n</font><font color="#c53aff">t</font><font color="#ce31ff"> </font><font color="#d629ff">S</font><font color="#de21ff">y</font><font color="#e619ff">s</font><font color="#ef10ff">t</font><font color="#f708ff">e</font><font color="#ff00ff">m</font></div></h3></center>

		<h1 style="font-style:italic; font-size:26pt;padding-left:30px;color:white;margin-left:34%">Book Details :</h1>
		

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
		
		$book = filter_input(INPUT_GET,'search');
		
		$sql="SELECT * FROM book_database WHERE book_id='$book' OR book_name='$book'";
		$ret=mysqli_query($conn,$sql);
            if(mysqli_num_rows($ret)>0)
            {
                    echo "<table class='table table-bordered table-striped'>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>Book ID</th>";
                        echo "<th>Book Name</th>";
                        echo "<th>Author</th>";
                        echo "<th>Publication</th>";
                        echo "<th>Number of books</th>";
						echo "<th>Buttons</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while ($row = $ret->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['book_id'] . "</td>";
                            echo "<td>" . $row['book_name'] . "</td>";
                            echo "<td>" . $row['aut_name'] . "</td>";
                            echo "<td>" . $row['pub'] . "</td>";
                            echo "<td>" . $row['qty'] . "</td>";
							echo "<td>";
                            echo "<a href='read.php?book_id=" . $row['book_id'] . "' class='btn btn-primary'>Read</a>";
                            echo "<a href='update.php?book_id=" . $row['book_id'] . "' class='btn btn-info'>Update</a>";
                            echo "<a href='delete.php?book_id=" . $row['book_id'] . "' class='btn btn-danger'>Delete</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        // Free result set
                        } else {
                        echo "<p class='lead'><em>No records were found.</em></p>";
                    }
					
?>
    </body>
</html>
