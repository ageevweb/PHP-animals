<?php
  require_once 'core/config.php';
  require_once 'core/function.php';

  // var_dump($_POST);

  $title = $_POST['title'];
  $descr_mini = $_POST['mini-descr'];
  $description = $_POST['description'];

  $conn = connect();

  $sql = "INSERT INTO info (title, descr_min, description) VALUES ('".$title."', '".$descr_mini."','".$description."')";
  if(mysqli_query($conn, $sql)){
    echo "new record successfully";
  } else {
    echo "error:" .$sql.mysqli_error($conn);
  }

  close($conn);




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



