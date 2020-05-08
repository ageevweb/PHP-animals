<?php
  require_once('./templates/header.php');
  $data = selectMain($conn);
  $countPage = paginationCount($conn);
  $tag = getAllTags($conn);
  $cat = getAllCatInfo($conn);
  close($conn);
?>
  
<div class="container">
  <div class="row">
    <div class="col-lg-9">
      <div class="row">
        <?php
          $out = '';
          for ($i=0; $i < count($data); $i++){
            $out .="<div class='col-lg-4 col-md-6'>";
            $out .="<div class='card'>";
            $out .="<img class='card-img-top' src='/images/{$data[$i]['image']}'>";
            $out .="<div class='card-body'>";
            $out .="<h5 class='card-title'>{$data[$i]['title']}</h5>";
            $out .="<p class='card-text'>{$data[$i]['descr_min']}</p>";
            $out .='<p><a class="btn btn-primary" href="/arcticle.php?id='.$data[$i]['id'].'">Read more...</a></p>';
            $out .="</div>";
            $out .="</div>";
            $out .="</div>";
          } 
          echo $out;
        ?>
      </div>
    </div>
    <div class="col-lg-3">
      <?php
        $out = '<div class="list-group">';
        for ($i=0; $i < count($cat); $i++){
          $out .='<a class="list-group-item list-group-item-action" href="/category.php?id='.$cat[$i]['id'].'">'.$cat[$i]['description'].'</a>';
        }
        $out .= '</div>';
        echo $out;
      ?>
    </div>
  </div>
</div>

<div class="container">
  <nav>
    <ul class="pagination">
      <?php
        for ($i=0; $i < $countPage; $i++){
          $j = $i+1;
          echo "<li class='page-item'><a class='page-link' href='/index.php?page={$i}' style='padding: 5px;'>{$j}</a></li>";
        }
      ?>
    </ul>
  </nav>
</div>

<div class="container">
  <?php
    echo '<hr>';
    for ($i=0; $i < count($tag); $i++){
        echo "<a class='badge badge-info p-2 m-1' href='/tag.php?tag={$tag[$i]}' style='padding: 5px;'>{$tag[$i]}</a>";
    }
  ?>
</div>

<?php
  require_once('./templates/footer.php');
?>