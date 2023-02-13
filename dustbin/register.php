

<!DOCTYPE html>
<html lang="en" style="overflow: hidden;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management Software</title>
    <link rel="stylesheet" href="style.css">
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
   
   if(isset($_POST['register'])){
      
         $msg=insert_data($connection);
         
   }






      function legal_input($value) {
     $value = trim($value);
     $value = stripslashes($value);
     $value = htmlspecialchars($value);
     return $value;
   }
   
   // insert query
   function insert_data($connection){
      
         $username= legal_input($_POST['username']);
         $email= legal_input($_POST['email']);
         $password = legal_input($_POST['password']);
         
         $query="INSERT INTO auth(username, email, passwords) VALUES ('$username','$email','$password')";
         $exec= mysqli_query($connection,$query);
         if($exec){
            header("Location: dataform.php");
           
         }else{
           $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
         }
         return $msg;
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
                    <li><a href="register.html">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="registerpanel">
        <form action="dataform.php" method="post" id="form">
            <h1>Register</h1>
            <?php if (!empty($msg)) {
                                    echo $msg;
                                } ?></p>
            <span>
                Email: <input type="email" name="email" id="email" placeholder="Enter Your Email">
            </span>
            <span> Username: <input type="text" name="username" id="username" placeholder="Enter Username">
            </span>
           
            <span>
                Password: <input type="password" name="password" id="password" placeholder="Enter Password">
            </span>
            <span> <button  class="submit" type="submit" name="register" id="submit">Signup</button>
            </span>
            <div>
                <span>
                    Already have an account? <a href="#">Login</a>
                </span>
            </div>
        </form>
        <div class="homepgimage">
            <img class="homeimg" src="https://png.pngtree.com/png-vector/20190324/ourlarge/pngtree-vector-male-student-icon-png-image_862310.jpg" alt="" srcset="">
        </div>
    </div>
</body>

</html>
