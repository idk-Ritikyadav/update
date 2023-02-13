<?php
$conn = mysqli_connect("localhost", "root", "", "school");




$id = $_GET["id"];

// Delete the specified user
$sql1 = "DELETE FROM userdetails WHERE id=$id";
$sql2 = "DELETE FROM users WHERE id=$id";

if (mysqli_query($conn, $sql1) &&  mysqli_query($conn, $sql2)) {
    header("Location: admin.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>