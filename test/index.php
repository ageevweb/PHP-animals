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
  require_once 'config.php';
  require_once 'function.php';

  $conn = connect();

  // update--------------------------------------------------------------------
  // $newPrice = 55;
  // $id = 1;
  // $newName = 'bananaaaa';

  // $sql = "UPDATE goods SET cost=".$newPrice." WHERE id=".$id;
  // $sql = "UPDATE goods SET name='".$newName."' WHERE id=".$id;
  // строковое значение обернуть еще в одни скобки ''

  // if(mysqli_query($conn, $sql)){
  //   echo "updated successfully";
  // } else {
  //   echo "error updating".mysqli_error($conn);
  // }
  // update end--------------------------------------------------------------------


  // insert---------------------------------------------------------------------------
    $sql = "INSERT INTO goods(name, description, cost, amount, image) VALUES ('cherry', 'red', 23, 445, 'cherry.png')";
    if(mysqli_query($conn, $sql)){
      echo "new record successfully";
    } else {
      echo "error:" .$sql.mysqli_error($conn);
    }
  // insert end---------------------------------------------------------------------------



  $a = select($conn);

  echo '<pre>';
  print_r($a);
  echo '</pre>';

  close($conn);

?>

