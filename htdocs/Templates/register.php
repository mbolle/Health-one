<!DOCTYPE html>
<html lang="">
<?php
include_once('defaults/head.php');
?>

<body>

<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>

    <form class="row g-3">
        <div class="col-md-6">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName">
        </div>
        <div class="col-md-6">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName">
        </div>
        <div class="col-12">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" id="Email" placeholder="Jan@sportschool.nl">
        </div>
        <div class="col-12">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control" id="Password">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-warning">Sign in</button>
        </div>
    </form>

    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>
