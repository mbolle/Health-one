<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
global $product;
?>
<body>
<div class="container">
    <?php
    include_once ('defaults/header.php');
    include_once ('defaults/menu.php');
    include_once ('defaults/pictures.php');
    ?>
    <div class="col-md-7 order-md2">
        <img class="img-fluid" src="<?= $product->picture; ?>" alt="image">
    </div>
    <div class="col-md-5 order-md-1">
        <p class="lead">
            <?= $product->description?>
        </p>
    </div>
    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>
