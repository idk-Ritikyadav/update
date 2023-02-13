<?php

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "school");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the form data
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $stream = $_POST['stream'];
  $shift = $_POST['shift'];
  $year = $_POST['year'];
  $id = $_GET['id'];

  // Update the database
  $sql = "UPDATE userdetails SET name='$name', phone='$phone', address='$address', stream='$stream', shift='$shift', year='$year' WHERE id=$id";
  if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }

  // Close the connection
  mysqli_close($conn);
}
?>
