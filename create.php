<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['book_id']) && isset($_POST['book_name']) && isset($_POST['aut_name']) && isset($_POST['pub']) && isset($_POST['qty'])) {

        $sql = "INSERT INTO book_database (book_id, book_name, aut_name, pub, qty) VALUES (?,?,?,?,?)";
        if ($stmt = $link->prepare($sql)) {
            $stmt->bind_param("isssi", $_POST['book_id'], $_POST['book_name'], $_POST['aut_name'], $_POST['pub'], $_POST['qty']);
            if ($stmt->execute()) {
                header("location: view_books.php");
                exit();
            } else {
                echo "Error! Please try again later.";
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
			background-image:url("image/books2.jpg");
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
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header"><br>
                    <h2>Add Book(s)</h2>
                </div>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
                    <div class="form-group">
                        <label>Book ID</label>
                        <input type="number" name="book_id" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Book Name</label>
                        <input type="text" name="book_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" name="aut_name" class="form-control" required>
                    </div>
					<div class="form-group">
                        <label>Publication</label>
                        <input type="text" name="pub" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Number of books</label>
                        <input type="number" name="qty" class="form-control" required>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <a href="view_books.php" class="btn btn-default">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>