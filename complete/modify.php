


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit Your Detail</title>
</head>
<body>


<div class="">

    <div class="form-title">
    <h2>Create Form</h2>
    
    
    </div>
 
    <p style="color:red">
    
<?php if(!empty($msg)){echo $msg; }?>
</p>
<form action="update-script.php" method="post">
  <?php
  $conn = mysqli_connect("localhost", "root", "", "school");

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  if (isset($_GET['id']) or isset($_GET['username'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM userdetails WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    }
  }
  ?>
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
  <div>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" value="<?php echo $row['username']; ?>">
  </div>
  <div>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>">
  </div>
  <div>
    <label for="stream">Stream:</label>
    <input type="text" id="stream" name="stream" value="<?php echo $row['stream']; ?>">
  </div>
  <div>
    <label for="shift">Shift:</label>
    <input type="text" id="shift" name="shift" value="<?php echo $row['shift']; ?>">
  </div>
  <div>
    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" value="<?php echo $row['phone']; ?>">
  </div>
  <div>
    <label for="year">Year:</label>
    <input type="text" id="year" name="year" value="<?php echo $row['year']; ?>">
  </div>
  <div>
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" value="<?php echo $row['address']; ?>">
  </div>
  <input type="submit" value="Update">
</form>


</body>
</html>