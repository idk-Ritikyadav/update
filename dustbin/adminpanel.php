



<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Management Software</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="adminstyle.css">
  <link rel="stylesheet" href="profile.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    table,
    td,
    th {

      border: 2px solid #ddd;
      text-align: left;
    }

    h2 {
      margin-bottom: 2rem;
    }

    table {
      margin: 0px auto;
      border-collapse: collapse;
      max-width: auto;
      width: auto;

    }

    .table-data {

      width: auto;
      margin: 0 auto;
    }

    th,
    td {
      padding: 0.3rem;
    }

    body {
      overflow-x: hidden;
    }
  </style>
</head>

<body>

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
    <!-- <div id="alpha" class="homepgimage">
      <h2>Menu</h2>
      <button id="submit">Show Admin Profile</button>
      <button id="submit">Show Records</button>
      <button id="submit">Add Records</button>
      <button id="submit">Delete Users Account</button>


    </div> -->
    <form action="" id="beta">
      <h1 class="tabletitle">user data</h1>
      <table border="1">

        <tr>

          <th>S.N</th>
          <th>Full Name</th>
          <th>Email Address</th>
          <th>stream</th>
          <th>shift</th>
          <th>Date of Birth</th>
          <th>Member Types</th>


        </tr>

        <?php

        if (count($fetchData) > 0) {
          $sn = 1;
          foreach ($fetchData as $data) {

        ?> <tr>
              <td><?php echo $sn; ?></td>
              <td><?php echo $data['full_name']; ?></td>
              <td><?php echo $data['email']; ?> </td>
              <td><?php echo $data['stream']; ?></td>
              <td><?php echo $data['shift']; ?></td>
              <td><?php echo $data['dob']; ?></td>
              <td><?php echo $data['types']; ?></td>



              <td><a href="updateinfo.php?edit=<?php echo $data['id']; ?>"><i class="fas fa-edit"></i></a></td>
              <td><a href="delete.php?delete=<?php echo $data['id']; ?>"><i class="fa-solid fa-trash"></i></a></td>
            </tr> <?php

                  $sn++;
                }
              } else {

                  ?>

          <tr>
            <td colspan="7">No Data Found</td>
          </tr>

        <?php

              }
        ?>

      </table>
    </form>

  </div>
</body>

</html>