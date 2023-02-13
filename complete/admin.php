<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h1>Admin Page</h1>
  <table>
    <tr>
      <th>Username</th>
      <th>Name</th>
      <th>Stream</th>
      <th>Shift</th>
      <th>Phone</th>
      <th>Year</th>
      <th>Address</th>
      <th>edit</th>
      <th>delete</th>
    </tr>
    <?php
    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "school");

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Fetch the data from the users table
    $sql = "SELECT * FROM userdetails";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["stream"] . "</td>";
        echo "<td>" . $row["shift"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td>" . $row["year"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";

        echo "<td>";
        echo "<a href='modify.php?id=" . $row["id"] . "'>Edit</a> | ";
        echo "</td>";
        echo "<td>";
        echo "<a href='delete-script.php?id=" . $row["id"] . "'>Delete</a>";
        echo "</td>";
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='9'>No records found</td></tr>";
    }

    mysqli_close($conn);
    ?>
    </table>
</body>
</html>

