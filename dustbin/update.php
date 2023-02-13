<?php

$hostname     = "localhost";
$username     = "root";
$password     = "";
$databasename = "rikiniti";

// Create connection
$connection = mysqli_connect($hostname, $username, $password,$databasename);
// Check connection
if (!$connection) {
    die("Unable to Connect database: " . mysqli_connect_error());
}


if(isset($_GET['edit'])){

  $id= $_GET['edit'];
$editData= edit_data($connection, $id);
}

if(isset($_POST['update']) && isset($_GET['edit'])){

$id= $_GET['edit'];
  update_data($connection,$id);
  
  
} 
function edit_data($connection, $id)
{
$query= "SELECT * FROM memberdetails WHERE id= $id";
$exec = mysqli_query($connection, $query);
$row= mysqli_fetch_assoc($exec);
return $row;
}

// update data query
function update_data($connection, $id){

  $fname= legal_input($_POST['fname']);
    
    $stream = legal_input($_POST['stream']);
    $shift = legal_input($_POST['shift']);
    $dob = legal_input($_POST['dob']);
    $email= legal_input($_POST['email']);
    $member = legal_input($_POST['member']);
    // $query="INSERT INTO memberdetails(full_name, types, email, shift, stream, dob) VALUES ('$fname','$member','$email','$shift','$stream','$dob')";

    $query="UPDATE memberdetails 
          SET full_name='$fname',
              email='$email',
              shift= '$shift',
              stream='$stream',
              dob= '$dob',
              types='$member'

             
              WHERE id=$id";

    $exec= mysqli_query($connection,$query);

    if($exec){
       header('location:user-table.php');
    
    }else{
       $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
       echo $msg;  
    }
}

// convert illegal input to legal input
function legal_input($value) {
$value = trim($value);
$value = stripslashes($value);
$value = htmlspecialchars($value);
return $value;
}
?>


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
    <form method="post" action="">
          <label>Full Name</label>
        
<input type="text" placeholder="Enter Full Name" name="fname" required value="<?php echo isset($editData) ? $editData['full_name'] : '' ?>">

          <label>Email Address</label>
        
<input type="email" placeholder="Enter Email Address" name="email" required value="<?php echo isset($editData) ? $editData['email'] : '' ?>">

          <label>Stream</label>
<input type="city" placeholder="Enter Stream" name="stream" required value="<?php echo isset($editData) ? $editData['stream'] : '' ?>">

          <label>shift</label>
        
<input type="text" placeholder="Enter shift" name="shift" required value="<?php echo isset($editData) ? $editData['shift'] : '' ?>">

<label>dob</label>
        
        <input type="text" placeholder="Enter dob" name="dob" required value="<?php echo isset($editData) ? $editData['dob'] : '' ?>">
        <label>member</label>
        
        <input type="text" placeholder="Enter Member" name="member" required value="<?php echo isset($editData) ? $editData['types'] : '' ?>">
        
        
          <button type="submit" name="update">Submit</button>
    </form>
        </div>
</div>



</body>
</html>