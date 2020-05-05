<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


<?php
  require_once('config.php');

  $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
  mysqli_set_charset($conn, "utf8");
  // check connection
  if(!$conn){
    die("Connection feiled" . mysqli_connect_error());
  }
  // запрос в базу
  $sql = "SELECT * FROM goods";
  // $sql = "SELECT name,cost FROM goods WHERE cost > 30";
  $result = mysqli_query($conn, $sql);

  var_dump(mysqli_num_rows($result)); // колличество строк в таблице

  $a = [];

  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
      $a[] = $row;
    } 
  } else { 
    echo '0 results' ;
  }
  
  echo '<pre>';
  print_r($a);
  echo '</pre>';
  mysqli_close($conn);
?>

