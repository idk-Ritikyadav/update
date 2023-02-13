<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management Software</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        
*{
    box-sizing: border-box;
    margin: 0px;
    padding: 0px;
    font-family: 'Roboto', sans-serif;
    color: antiquewhite;
    font-size: 16px;
    

}

html{
    background-color: #023246;

}

body{
    background-color: #023246;
    margin-top: 100px;
}

.nav{
    opacity: 0.8;
    background-color: #023246;
    height: 100px;
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 1rem;
    box-shadow: 0 2px 5px rgba(0,0,0,0.3);
}

.logo{
    color: #fff;
    font-size: 2rem;
    font-weight: 700;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.nav-links,li,a {
    display: inline;
    list-style: none;
    margin: 0 5px;
    font-size: 1.3rem;
    text-decoration: none;
    
}

li a:hover, .logo{
    color: #cbe631;
}

.registerpanel{
    display: flex;
    margin: 3rem;
    padding: 2rem;
    font-style: italic;
    background-color: #5c5c5c;
    border-radius: 1rem;
    
}
h1{
    font-size: 2rem;
    font-weight: 700;
    text-align: left;
    margin: 0rem;
    padding: 0rem;
    color: #ffffff;
}
.registerpanel span{
  display: block;
  padding: 1rem;
  margin: 0.2rem;
  font-size: 1.2rem;
}

.registerpanel input{
    display: block;
    padding: 0.5rem;
    margin: 0.5rem;
    width: 60%;
    border: 1px solid #fff;
    background-color: #023246;
    color: #fff;
    font-size: 1.5rem;
}
    
.submit{
  padding: 0.5rem;
    margin: 0.5rem;
    width: 40%;
    color: #023246;
    font-size: 1rem;
    font-weight: 700;
    border-radius: 0.5rem;
}
select, option{
    color: #023246;
    margin-left: 3rem;
    padding: 0.1rem;
    border-radius: 0.3rem;
}
form, .homepgimage{
    width: 50%;
    height: 70vh;
    overflow: hidden;
    margin: 1rem;
}

.homeimg{
    border-radius: 100%;
 

}

#register input{
    display: block;
    padding: 0.4rem;
    width: 60%;
    background-color: 023246;
    color: #fff;
    font-size: 1rem;
}
#register span{
    font-size: 1.2rem;
    margin: 0.7rem;
    padding: 0%;
}

#form span{
    font-size: 1.2rem;
    margin: 1rem;
    padding: 0%;
}

#quote{
    color: #e3eea1;
    margin-top: 3rem;
    font-size: 6rem;
    text-align: center;
}
    </style>
</head>

<body>
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
   
   if(isset($_POST['create'])){
      
         $msg=insert_data($connection);
         
   }
   
   // insert query
   function insert_data($connection){
      
         $fname= legal_input($_POST['fname']);
         $email= legal_input($_POST['email']);
         $stream = legal_input($_POST['stream']);
         $shift = legal_input($_POST['shift']);
         $dob = legal_input($_POST['dob']);
         $member = legal_input($_POST['member']);
   
   
         $query="INSERT INTO memberdetails(full_name, types, email, shift, stream, dob) VALUES ('$fname','$member','$email','$shift','$stream','$dob')";
         $exec= mysqli_query($connection,$query);
         if($exec){
   
            header("Location: welcome.php");
            exit;
         }else{
           $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
         }
   }
   
   function legal_input($value) {
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
        <form action="welcome.php" method="post">
<h1>Enter Your data</h1>  
<span></span>
<span> Name: <input type="text" name="fname" id="fname" placeholder="Enter name  " required>
            </span>
            <span> Type:
                <select name="member" id="">
                    <option value="Student">Student</option>
                    <option value="Teacher">Teacher</option>
                    <option value="Teacher">Teacher</option>

                </select>
                
            </span>
            <span> Stream:     <select name="stream" id="" required>
                <option value="Science">Science</option>
                <option value="Management">Management</option>

            </select>
            </span>
            <span> Email: <input type="text" name="email" placeholder="email@email.com">
            </span>
            <span>Date of Birth : <input type="date" name="dob" id="" placeholder="Enter your Date of Birth">
            </span>
            <span> Shift:     <select name="shift" id="">
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