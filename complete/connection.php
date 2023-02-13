<?php 
$conn = mysqli_connect("localhost", "root", "", "school");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//  function is used to close the connection to the database. It is used to free up the resources used by the connection.

?>