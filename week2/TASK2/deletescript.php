<?php
include "../../connect.php";

if (isset($_GET['blogId'])) {
    $id = intval($_GET['blogId']); 

    $sql = "DELETE FROM `post` WHERE id = $id";
    $result = $conn->query($sql);
    if ($result === TRUE) {
        header("Location: deleteblog.php"); 
        exit();
    } else {
        echo "Error deleting post: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}
?>
