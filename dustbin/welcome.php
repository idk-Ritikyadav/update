<html>
  <head>
    <style>
      .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: aquamarine;
      }
    </style>
  </head>
  <body>
    <?php 
     ?>

    <div class="container">
<h1>
  Welcome <?php
    
    if (isset($_POST["fname"])) {
      echo $_POST["fname"];
    }
    else{
      echo "No data";
    }
  ?>
</h1>

</h1>
    </div>
  </body>
</html>