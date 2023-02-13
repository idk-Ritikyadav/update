<?php
$conn = mysqli_connect("localhost", "root", "", "school");


if(isset($_GET['delete'])){

    $id= $_GET['delete'];
  delete_data($conn, $id);

}

// delete data query
function delete_data($conn, $id){
   
    $query="DELETE from auth AND userdetails WHERE id=$id";
    $exec= mysqli_query($conn,$query);

    if($exec){
      header('location:admin.php');
    }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($conn);
      echo $msg;
    }
}
?>