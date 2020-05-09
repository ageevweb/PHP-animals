<?php
    require_once('./templates/header.php');
    $data = selectArticle($conn);
    $tag = getArticleTags($conn);
    close($conn);
?>
<div class="container">
    <?php
        $out = '';
        $out .="<h1>{$data['title']}</h1>";
        $out .="<img src='/images/{$data['image']}'>";
        $out .="<div>{$data['description']}</div>";
        echo $out;

        echo '<hr>';
        for ($i=0; $i < count($tag); $i++){
            echo "<a class='badge badge-info p-2 m-1' href='/tag.php?tag={$tag[$i]['tag']}' style='padding: 5px;'>{$tag[$i]['tag']}</a>";
        }
    ?>
</div>
<?php
  require_once('./templates/footer.php');
?>
