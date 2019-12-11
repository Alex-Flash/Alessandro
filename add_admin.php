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
			
			li {
				float: right;
			}
			
			#titlehead{
				float: left;
			}

			li a {
				display: block;
				color: white;
				font-size:20px;
				text-align: center;
				padding: 16px 20px;
				margin-top:10px;
				text-decoration: none;
			}

			li a:hover:not(.active) {
				background-color: #4dff4d;
			}

			.active {
				background-color: #4dff4d;
			}
			
			* {
				box-sizing: border-box;
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

			label {
				font-size:18px;
				margin-left:450px;
				padding: 12px 12px 12px 0;
				display: inline-block;
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

			.container {
			    margin-left:20%;
				width:50%;
				border-radius: 5px;
				background-color: #ffffff;
				padding: 20px;
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

			
			
		</style>
	</head>
	
	<body class="bg">
		
		
		<ul>
			<li id="title"><h3><div></font><font color="#3ac5ff">L</font><font color="#42bdff">i</font><font color="#4ab5ff">b</font><font color="#52adff">r</font><font color="#5aa5ff">a</font><font color="#639cff">r</font><font color="#6b94ff">y</font><font color="#738cff"> </font><font color="#7b84ff">M</font><font color="#847bff">a</font><font color="#8c73ff">n</font><font color="#946bff">a</font><font color="#9c63ff">g</font><font color="#a55aff">e</font><font color="#ad52ff">m</font><font color="#b54aff">e</font><font color="#bd42ff">n</font><font color="#c53aff">t</font><font color="#ce31ff"> </font><font color="#d629ff">S</font><font color="#de21ff">y</font><font color="#e619ff">s</font><font color="#ef10ff">t</font><font color="#f708ff">e</font><font color="#ff00ff">m</font></div></h3></center>
</li>
		</ul>
		
		
		
		
		<h1 style="font-style:italic; font-size:26pt;padding-left:30px;color:white"><center>Add New Admin</center></h1>
		
			
		<div class="row">
  <div class="column" style="background-color:transparent;">
   
						
			<form action="add_admin_action.php" method = "get">
			
		            	<input type="text"  required  name="username" placeholder=" Name" style="width:280px;">
						<h1></h1>
						<input type="text"  required  name="userid" placeholder="id" style="width:280px;">
						<h1> </h1>
						<input type="text"  required  name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.com$" placeholder="email" style="width:280px;">
						<h1> </h1>
						<input type="password"  required name="userpass" placeholder=" Password" style="width:280px;">
						<h1></h1>
					    <input type="submit"  value="Submit" style="width:280px;">
			</form>

			</div>
			</div>
		
	</body>
	
	
	


</html>