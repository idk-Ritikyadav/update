<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management Software</title>
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <?php

    $hostname     = "localhost";
    $username     = "root";
    $password     = "";
    $databasename = "rikiniti";

    // Create connection
    $connection = mysqli_connect($hostname, $username, $password, $databasename);
    // Check connection
    if (!$connection) {
        die("Unable to Connect database: " . mysqli_connect_error());
    }


    if (isset($_GET['edit'])) {

        $id = $_GET['edit'];
        $editData = edit_data($connection, $id);
    }

    if (isset($_POST['update']) && isset($_GET['edit'])) {

        $id = $_GET['edit'];
        update_data($connection, $id);
    }
    function edit_data($connection, $id)
    {
        $query = "SELECT * FROM memberdetails WHERE id= $id";
        $exec = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($exec);
        return $row;
    }

    // update data query
    function update_data($connection, $id)
    {

        $fname = legal_input($_POST['fname']);

        $stream = legal_input($_POST['stream']);
        $shift = legal_input($_POST['shift']);
        $dob = legal_input($_POST['dob']);
        $email = legal_input($_POST['email']);
        $member = legal_input($_POST['member']);
        // $query="INSERT INTO memberdetails(full_name, types, email, shift, stream, dob) VALUES ('$fname','$member','$email','$shift','$stream','$dob')";

        $query = "UPDATE memberdetails 
          SET full_name='$fname',
              email='$email',
              shift= '$shift',
              stream='$stream',
              dob= '$dob',
              types='$member'

             
              WHERE id=$id";

        $exec = mysqli_query($connection, $query);

        if ($exec) {
            header('location:user-table.php');
        } else {
            $msg = "Error: " . $query . "<br>" . mysqli_error($connection);
            echo $msg;
        }
    }

    // convert illegal input to legal input
    function legal_input($value)
    {
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
    }
    ?>

    <nav>

        <div class="nav">
            <div class="logo">
                Ritik
            </div>
            <div class="nav-links">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="login.html">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div id="register" class="registerpanel">
        <?php if (!empty($msg)) {
            echo $msg;
        } ?>
        </p>
        <form action="" method="post">
            <h1>Edit your data</h1>
            <span></span>
            <span> Name: <input type="text" name="fname" id="fname" placeholder="Enter name" required value="<?php echo isset($editData) ? $editData['full_name'] : '' ?>">
            </span>
            <span> Type:
                <select name="member" id="">
                    <option value="Student">Student</option>
                    <option value="Teacher">Teacher</option>
                    

                </select>

            </span>
            <span> Stream: <select name="stream" id="" required value="stream">
                    <option value="Science">Science</option>
                    <option value="Management">Management</option>

                </select>
            </span>
            <span> Email: <input type="text" name="email" placeholder="email@email.com" required value="<?php echo isset($editData) ? $editData['email'] : '' ?>">
            </span>
            <span>Date of Birth : <input type="date" name="dob" id="" placeholder="Enter your Date of Birth" required value="<?php echo isset($editData) ? $editData['dob'] : '' ?>">
            </span>
            <span> Shift: <select name="shift" id="" required>
                    <option value="Day">Day</option>
                    <option value="Morning">Morning</option>
                    <option value="Both">Both</option>

                </select>
            </span>

            <span> <button class="submit" type="submit" name="create" value="submit" id="submit">submit</button>
            </span>
        </form>
        <div class="homepgimage">
            <img class="homeimg" src="https://png.pngtree.com/png-vector/20190324/ourlarge/pngtree-vector-male-student-icon-png-image_862310.jpg" alt="" srcset="">
        </div>
    </div>
</body>

</html>