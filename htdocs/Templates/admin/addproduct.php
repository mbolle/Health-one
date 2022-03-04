<!doctype html>
<html lang="en">
<?php
include_once('admin_defaults/admin_head.php');
require_once ('../../Modules/Categories.php');
$categories=getCategories();
?>

<body>
<main class='container'>
<?php
include_once ('admin_defaults/admin_header.php');
include_once ('admin_defaults/admin_menu.php');
?>
    <form class="row g-3" method="post" enctype="multipart/form-data">
        <div class="col-md-6">
            <label for="inputName" class="form-label">Naam</label>
            <input type="text" class="form-control" id="inputName" name="name" value='<?php if (isset($_POST['name'])) {echo $_POST['name'];} else {echo "";} ?>'>
        </div>
        <div class="col-md-6">
            <label for="cat" class="form-label">Category</label>
            <select class="form-select" id="cat" name="category">
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category->id?>"><?=$category->name?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="col-12">
            <label for="name" class="col-form-label">Beschrijving:</label>
            <textarea class="form-control" id="name" name="description"><?php if (isset($_POST['description'])) {echo $_POST['description'];} else {echo "";} ?>
            </textarea>
        </div>
        <div class="col-12">
            <label for="formFile" class="form-label">Image bij sportapparaat </label>
            <input class="form-control" name="fileToUpload" type="file" id="formFile">
        </div>
        <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</main>
<?php
include_once('admin_defaults/admin_footer.php');
?>
</body>
</html>
