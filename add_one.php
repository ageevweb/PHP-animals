<?php
  require_once 'core/config.php';
  require_once 'core/function.php';

  // var_dump($_POST);
  if(isset($_POST['title']) && trim($_POST['title']) !== ''){
    $title = $_POST['title'];
    $descr_mini = $_POST['mini-descr'];
    $description = $_POST['description'];

    $conn = connect();

    // print_r($_FILES);
    // загружаем фото
    move_uploaded_file($_FILES[image]['tmp_name'], 'images/'.$_FILES['image']['name']);

    $sql = "INSERT INTO info (title, descr_min, description, image) VALUES ('".$title."', '".$descr_mini."','".$description."', '".$_FILES['image']['name']."')";
    if(mysqli_query($conn, $sql)){
      setcookie('bd_updated_success', 1, time()+10);
      header('Location: /');
    } else {
      echo "error:" .$sql.mysqli_error($conn);
    }

    close($conn);
  }
  
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
?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>

  <form action="" method="POST" enctype="multipart/form-data">
    title: <br>
    <input type="text" name="title"> <br>
    mini description: <br>
    <input type="text" name="mini-descr"> <br>
    description: <br>
    <input type="text" name="description"> <br>
    image: <br>
    <input type="file" name="image"> <br>
    <input type="submit" value="add post">
  </form>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>