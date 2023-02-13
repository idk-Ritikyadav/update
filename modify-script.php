<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
  // Get the values from the form
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $stream = $_POST['stream'];
  $shift = $_POST['shift'];
  $year = $_POST['year'];
  
  // Connect to the database
  $conn = mysqli_connect("localhost", "root", "", "school");
  
  // Update the data in the database
$query = "UPDATE userdetails SET name='$name', phone='$phone', address='$address', stream='$stream', shift='$shift', year='$year' WHERE id='$username'";
  $result = mysqli_query($conn, $query);
  
  // Check if the data was updated successfully
  if ($result) {
    echo "Data updated successfully";
  } else {
    echo "Error updating data: " . mysqli_error($conn);
  }
  
  // Close the database connection
  mysqli_close($conn);
}
?>
