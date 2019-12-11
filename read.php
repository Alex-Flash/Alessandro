<?php
require_once "config.php";

if (isset($_GET["book_id"]) && !empty(trim($_GET["book_id"]))) {
    $sql = "SELECT * FROM book_database WHERE book_id = ?";
    if ($stmt = $link->prepare($sql)) {
        $stmt->bind_param("i", $_GET["book_id"]);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);

                $book_id = $row["book_id"];
                $book_name = $row["book_name"];
                $aut_name = $row["aut_name"];
				$pub = $row["pub"];
                $qty = $row["qty"];

            } else {
                echo "Error! Please try again later.";
                exit();
            }

        } else {
            echo "Error! Please try again later.";
            exit();
        }
    }
    
    $link->close();
} else {
    echo "Error! Please try again later.";
    exit();
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
                <div class="card" style="margin-top: 20px;">
                    <div class="card-body">
                        <div class="page-header">
                            <h1><u>View Books</u></h1>
                        </div><br>
                        <div class="form-group">
                            <label >Book ID :</label>
                            <p class="form-control-static"><?php echo $book_id; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Book Name :</label>
                            <p class="form-control-static"><?php echo $book_name; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Author :</label>
                            <p class="form-control-static"><?php echo $aut_name; ?></p>
                        </div>
						<div class="form-group">
                            <label>Publication :</label>
                            <p class="form-control-static"><?php echo $pub; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Number of copies :</label>
                            <p class="form-control-static"><?php echo $qty; ?></p>
                        </div>
                        <p><a href="view_books.php" class="btn btn-primary">Back</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>