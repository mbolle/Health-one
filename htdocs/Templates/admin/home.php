<?php
include_once('adminDefaults/head.php');
?>
<body>
<div class="container">
    <?php
    include_once ('adminDefaults/header.php');
    include_once ('adminDefaults/menu.php');
    include_once ('Defaults/pictures.php');
    //    if (!empty($_POST['mail'])) {
    //        $_POST = [];
    //    }
    ?>
    <div class="row">
        <div style="width: 100%">
            <p>Welkom Admin :]</p>

            <?php $test = getCategoryId(); ?>
            <?php for ($i = 0; $i < count($test); $i++ ):?>
                <?php $categoryId = $i + 2; ?>
                <?php $categoryName = getCategoryName($categoryId); ?>
                <?php $products = getProducts($categoryId) ?>
                <?php foreach ($products as $product): ?>
                    <div class="card">
                        <div class="card-body text-center display-flex">
                            <img class="admin-img" src="../public/img/categories/<?= $categoryName?>/<?= $product->picture?>">
                            <div style="padding-right: 1rem" class="card-title mb-3"><?= $product->name ?></div>
                            <form method="post">

                                <select name="operation">
                                    <option></option>
                                    <option value="edit">edit</option>
                                    <option value="delete">delete</option>
                                </select>
                                <button type="submit" name="submit" value="<?=$product->id?>" class="btn-info">submit</button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endfor; ?>
            <div class="card">
                <div class="card-body">
                    <form method="post">
                        <button type="submit" name="submit" value="add" class="mid btn-primary">create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>
