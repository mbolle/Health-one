<!doctype html>
<html lang="en">
<?php
include_once('admin_defaults/admin_head.php');
?>
<body>
<main class='container'>
<?php
include_once ('admin_defaults/admin_header.php');
include_once ('admin_defaults/admin_menu.php');
?>
    <h1 class="text-danger">Delete Product</h1>
    <form method="post">
        <p>Weet u zeker dat u het product wilt verwijderen?</p><br>
        <div class="row">
            <div class="col-6">
                <button type="button submit" name="submit" class="btn btn-primary float-end">Ja</button>
            </div>
            <div class="col-6">
                <button type="button submit" name="cancel" class="btn btn-danger float-start">Nee</button>
            </div>
        </div>
    </form>

    <!--                                Sent form-->
</main>
<?php
include_once('admin_defaults/admin_footer.php');
?>
</body>
</html>
