<?php
  if(isset($_COOKIE['bd_updated_success']) && $_COOKIE['bd_updated_success'] == 1){
    setcookie('bd_updated_success', 1, time()-10);
    echo 'updated successfully';
  }
?>