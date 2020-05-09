<?php
require_once('template/header.php');
//!!!! check isset id in GET!!!!!
$data = deleteArticle($conn,$_GET['id']);
?>
<div class="container">
    <div class="ro">
        <div class="col-lg-12">
            <?php
                if ($data === true) {
                    echo 'Article was deleted';
                }
                else {
                    echo 'Error!'.$data;
                }
            ?>
        </div>
    </div>
</div>
<?php
close($conn);
