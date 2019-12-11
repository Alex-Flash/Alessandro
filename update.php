<?php
require_once "config.php";

if (isset($_GET['book_id'])) {
    $sql = "SELECT * FROM book_database WHERE book_id = ?";
    if ($stmt = $link->prepare($sql)) {
        $stmt->bind_param("i", $_GET["book_id"]);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);

                $param_book_id = $row["book_id"];
                $param_book_name = $row["book_name"];
                $param_aut_name = $row["aut_name"];
				$param_pub = $row["pub"];
                $param_qty = $row["qty"];
            } else {
                echo "Error! Data Not Found";
                exit();
            }
        } else {
            echo "Error! Please try again later.";
            exit();
        }
        $stmt->close();
    }
} else {
    header("location: view_books.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ( !empty($_POST["book_name"]) && !empty($_POST["aut_name"]) && !empty($_POST["pub"]) && !empty($_POST["qty"])) {

        $sql = "UPDATE book_database SET book_name = ?, aut_name = ?, pub = ?, qty = ? WHERE book_id = ?";
        if ($stmt = $link->prepare($sql)) {

            $stmt->bind_param("sssii", $_POST["book_name"], $_POST["aut_name"], $_POST["pub"], $_POST["qty"], $_GET["book_id"]);
            $stmt->execute();
            if ($stmt->error) {
                echo "Error!" . $stmt->error;
                exit();
            } else {
                header("location: view_books.php");
                exit();
            }
            $stmt->close();
        }
    }
    $link->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
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
		<body class="bg">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        label{
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <div class="card" style="margin-top:20px;">
                   <div class="card-body">
                       <div class="page-header">
                           <h2><u>Update Book</u></h2>
                       </div><br>
                       <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                           <div class="form-group">
                            <label >Book ID </label>
                            <p class="form-control-static"><?php echo $param_book_id; ?></p>
                        </div>
                           <div class="form-group">
                               <label>Book Name</label>
                               <input  name="book_name" class="form-control" required value="<?php echo $param_book_name; ?>">
                           </div>
                           <div class="form-group">
                               <label>Author</label>
                               <input  name="aut_name" class="form-control" required value="<?php echo $param_aut_name; ?>">
                           </div>
						   <div class="form-group">
                               <label>Publication</label>
                               <input  name="pub" class="form-control" required value="<?php echo $param_pub; ?>">
                           </div>
                           <div class="form-group">
                               <label>Number of books</label>
                               <input type="text" name="qty" class="form-control" required value="<?php echo $param_qty; ?>">
                           </div>
                           <input type="submit" class="btn btn-primary" value="Submit">
                           <a href="view_books.php" class="btn btn-default">Cancel</a>
                       </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>