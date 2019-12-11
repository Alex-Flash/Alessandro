<?php
if (isset($_GET["book_id"]) && !empty($_GET["book_id"])) {

    require_once "config.php";
    $sql = "DELETE FROM book_database WHERE book_id = ?";

    if ($stmt = $link->prepare($sql)) {
        $stmt->bind_param("i", $_GET["book_id"]);
        if ($stmt->execute()) {
            header("location: view_books.php");
            exit();
        } else {
            echo "Error! Please try again later.";
        }
    }
    
    $link->close();
} else {
    echo "Error! Please try again later.";
}
?>