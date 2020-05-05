<?php

  function connect(){
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
    mysqli_set_charset($conn, "utf8");
    // check connection
    if(!$conn){
      die("Connection feiled" . mysqli_connect_error());
    }
    return $conn;
  }


  function select($conn){
    $sql = "SELECT * FROM info";
    // $sql = "SELECT name,cost FROM goods WHERE cost > 30";
    $result = mysqli_query($conn, $sql);
    // var_dump(mysqli_num_rows($result)); // колличество строк в таблице
    $a = [];
  
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
        $a[] = $row;
      } 
    }
    return $a;
  }

  function close($conn){
    mysqli_close($conn);
  }
  
?>