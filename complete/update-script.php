<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "school");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the updated data from the form
$id = $_POST["id"];
$username = $_POST["username"];
$name = $_POST["name"];
$stream = $_POST["stream"];
$shift = $_POST["shift"];
$phone = $_POST["phone"];
$year = $_POST["year"];
$address = $_POST["address"];

// Update the data in the database
$sql = "UPDATE userdetails SET username='$username', name='$name', stream='$stream', shift='$shift', phone='$phone', year='$year', address='$address' WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

// Redirect to the admin panel page
header("Location: admin.php");
exit;
?>
