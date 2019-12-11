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
			font-size:20pt;
			color:Black;
			background-color:white;
			}
			
		.column {
  float: left;
  margin-left:41%;
  margin-top:1%;
  width: 25%;
  padding: 10px;
  height: 350px;
 
}



.row:after {
  content: "";
  display: table;
  clear: both;
}

			input[type=text], select, textarea,input[type=password],input[type=email],input[type=number],input[type=date] {
				margin-right:400px;
				text-align:center;
				width: 40%;
				padding: 12px;
				border: 1px solid #ccc;
				border-radius: 4px;
				resize: vertical;
			}
			input[type=submit] {
				background-color: #00b300;
				color: white;
				padding: 12px 20px;
				border: none;
				border-radius: 4px;
				cursor: pointer;
			}

			input[type=submit]:hover {
				background-color: #4dff4d;
			}

		</style>
	</head>
	<body class="bg">
		
		
		
		<ul>
			<li id="title"><h3><div></font><font color="#3ac5ff">L</font><font color="#42bdff">i</font><font color="#4ab5ff">b</font><font color="#52adff">r</font><font color="#5aa5ff">a</font><font color="#639cff">r</font><font color="#6b94ff">y</font><font color="#738cff"> </font><font color="#7b84ff">M</font><font color="#847bff">a</font><font color="#8c73ff">n</font><font color="#946bff">a</font><font color="#9c63ff">g</font><font color="#a55aff">e</font><font color="#ad52ff">m</font><font color="#b54aff">e</font><font color="#bd42ff">n</font><font color="#c53aff">t</font><font color="#ce31ff"> </font><font color="#d629ff">S</font><font color="#de21ff">y</font><font color="#e619ff">s</font><font color="#ef10ff">t</font><font color="#f708ff">e</font><font color="#ff00ff">m</font></div></h3></center>
</li>
		</ul>
		
		<h1 style="font-style:italic; font-size:26pt;padding-left:30px;"><center>Return Book(s)</center></h1>
		
			
		<div class="row">
			<div class="column" style="background-color:transparent;">
   
						
			<form action="return_book_action.php" method = "get">
						<input type="text"  required  name="usn" placeholder="Student name" style="width:280px;">
						<h1> </h1>
		            	<input type="text"  required  name="bookid" placeholder="Book ID" style="width:280px;">
						<h2 style="font-style:italic;color:Black">Returned On :</h2>
						
						<input type="date"  required  name="date" placeholder="Return date" style="width:280px;">
						<h1> </h1>
					    <input type="submit"  value="Return Book" style="width:280px;">
			</form>

			</div>
			</div>
		
	</body>
</html>