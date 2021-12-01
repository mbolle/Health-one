<!DOCTYPE html>
<html lang="">
<?php
include_once('defaults/head.php');
global $product;
global $reviewGiven;
?>

<body>
<div class="container">
    <?php
    include_once ('defaults/header.php');
    include_once ('defaults/menu.php');
    include_once ('defaults/pictures.php');
    ?>

    <?php if (isset($reviewGiven) && $reviewGiven['result'] === false){ ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Woops!</strong> er is iets mis met jou review, controleer het formulier svp nogmaals.
        </div>
    <?php } elseif ($reviewGiven['result'] === true){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>TOF! dank je wel!</strong>we gaan je review op de website zetten!
        </div>
    <?php } ?>

    <div class="col-md-7 order-md2">
        <img class="img-fluid" src="<?= $product->picture; ?>" alt="image">
    </div>


    <div class="col-md-5 order-md-1">
        <p class="lead">
            <?= $product->description?>
        </p>
    </div>

    <form method="POST">
        <input type="hidden" name="product_id" value="<?php echo $product->id;?>">
        <input type="hidden" name="form-sort" value="review">
        <div class="row">
            <div class="col">
                <input type="text" name="name" class="form-control"
                <?php if (isset($_POST['name'])) {echo 'value'.$_POST['name'].'""';} ?>
                        placeholder="Melanie de sporter"
                >
            </div>
        </div>
        <div class="form-group mt-3">
            Hoeveel sterren geef je?
            <select name="rating" class="form-control">
                <?php
                $curRating = 5;
                if (isset($_POST['rating'])) { $curRating = $_POST['rating']; }
                ?>
                <?php for ($i = 0; $i <= 5; $i++): ?>
                <option <?php if ($curRating == $i) {echo "selected"; } ?> value="<?php echo $i;?>">
                    <?php echo $i;?>
                </option>
                <?php endfor; ?>
            </select>
        </div>
        <div class=" mt-3">
             <button type="submit" name="verzenden" class="form-group btn btn-outline-primary">verstuur je review</button>
        </div>
        </form>

    <?php
    include_once ('defaults/footer.php');
    ?>
</body>
</html>
