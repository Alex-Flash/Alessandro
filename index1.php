<?php
require_once "config.php";
$sql = "SELECT * FROM users";
$result = $link->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
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
            <div class="col-md-12">
                <div class="card" style="margin-top: 20px;margin-bottom: 20px;">
                    <div class="card-body">
                        <h2 class="pull-left">User Details <a href="create.php" class="btn btn-success pull-right">Add New User</a></h2>
                    </div>
                </div>
                <?php
                if ($result->num_rows > 0) {
                        echo "<table class='table table-bordered table-striped'>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>BOOK ID</th>";
                        echo "<th>BOOK NAME</th>";
                        echo "<th>AUTHOR</th>";
                        echo "<th>PUBLISHER</th>";
                        echo "<th>Number of copies</th>";
						echo "<th>Buttons</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['book_id'] . "</td>";
                            echo "<td>" . $row['book_name'] . "</td>";
                            echo "<td>" . $row['aut_name'] . "</td>";
                            echo "<td>" . $row['pub'] . "</td>";
                            echo "<td>" . $row['qty'] . "</td>";
							echo "<td>";
                            echo "<a href='read.php?id=" . $row['id'] . "' class='btn btn-primary'>Read</a>";
                            echo "<a href='update.php?id=" . $row['id'] . "' class='btn btn-info'>Update</a>";
                            echo "<a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        // Free result set
                        $result->free();
                    } else {
                        echo "<p class='lead'><em>No records were found.</em></p>";
                    }
                $link->close();
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>