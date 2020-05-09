<?php
require_once('template/header.php');

$data = select($conn);
close($conn);
$flash='';
if (isset($_COOKIE['bd_create_success']) AND $_COOKIE['bd_create_success']!=''){
    if ($_COOKIE['bd_create_success'] == 1) {
        setcookie('bd_create_success', 1, time()-10);
        $flash =  "New record created successfully";
    }
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <?php
            echo   $flash;
            echo '<h2>Admin-panel</h2>';
            echo '<div class="mt-2 mb-2 text-right">';
            echo '<a href="/admin_create.php"><button class="btn btn-success">Add new</button></a></div>';
            $out = '<table  class="table table-striped">';
            $out .='<tr><th>ID</th><th>Title</th><th>Description min</th><th>Image</th><th>Action</th></tr>';
            for ($i=0; $i < count($data); $i++){
            $out .="<tr><td>{$data[$i]['id']}</td><td>{$data[$i]['title']}</td><td>{$data[$i]['descr_min']}</td><td><img src='/images/{$data[$i]['image']}' width='40'></td>";
            $out .="<td><p class='check-delete' data='{$data[$i]['id']}'>del</p></td></tr>";
            }
            $out .='</table>';
            echo $out;
            ?>
        </div>
    </div>
</div>

<script>
    window.onload= function(){
        let checkDelete = document.querySelectorAll('.check-delete');
        checkDelete.forEach(function(element){
            element.onclick = checkDeleteFunction;
        })
        function checkDeleteFunction(event){
            event.preventDefault();
            let a = confirm('Do you want delete');
            if (a == true) {
                location.href = '/admin_delete.php?id='+this.getAttribute('data');
            }
            return false;
        }
    }
</script>

<?php 
    require_once('template/footer.php');
?>
