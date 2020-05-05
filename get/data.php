<?php
  // var_dump($_GET);

  // // print_r($_GET);

  // function checkVars($v){
  //   if(isset($v) AND trim($v) != ''){
  //       return $v;
  //   } else {
  //       exit("Var is not defined");
  //   }
  // }

  // $a1 = checkVars($_GET['a1']);
  // $a2 = checkVars($_GET['a2']);

  // echo $a1 + $a2;

  $a = [5, 10, 15, 20];
  print_r($a);

  foreach($a as $key => $value){
    echo $value."<br>";
  }

  $b = ["name"=>"andy", "city"=>"spb"];
  print_r($b['name']);
?>

