<?php
  require_once 'core/config.php';
  require_once 'core/function.php';
  $conn = connect();
  $data = selectMain($conn);
  $countPage = paginationCount($conn);
  $tag = getAllTags($conn);
  close($conn);
?>



<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
  <div class="content-wrap" style="display: flex;">
  <?php
    $out = '';
    for ($i=0; $i < count($data); $i++){
        $out .="<img src='/images/{$data[$i]['image']}' width='100'>";
        $out .="<h2>{$data[$i]['title']}</h2>";
        $out .="<p>{$data[$i]['descr_min']}</p>";
        $out .='<p><a href="/arcticle.php?id='.$data[$i]['id'].'">Read more...</a></p>';
        $out.='<hr>';
    }
    echo $out;
  ?>
  </div>
  
  <?php
    for ($i=0; $i < $countPage; $i++){
        $j = $i+1;
        echo "<a href='/index.php?page={$i}' style='padding: 5px;'>{$j}</a>";
    }
    echo '<hr>';
    for ($i=0; $i < count($tag); $i++){
        echo "<a href='/tag.php?tag={$tag[$i]}' style='padding: 5px;'>{$tag[$i]}</a>";
    }
  ?>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>