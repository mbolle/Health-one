<!doctype html>
<html lang="en">
<?php
include_once('admin_defaults/admin_head.php');
require_once ('../../Modules/categories.php');
$categories=getCategories();
?>
<body>
<?php
include_once ('admin_defaults/admin_menu.php');
?>
<main class='container'>
    <h1 class="text-primary">Product toevoegen</h1>
    <form method="post">
        <label>Naam:</label><br>
        <input name="product-name" type="text" placeholder="Naam product"><br>
        <label>Categorie</label><br>
        <select name="category" class="form-select" style="width: 25% !important; text-align: center !important; margin-left: 500px;">
            <option value="">Categorie naam</option>
            <?php
            foreach ($categories as $category){
                echo "<option value='$category->id'>$category->name</option>";
            }
            ?>
            <br>
        </select>
        <label>Descriptie</label><br><br>
        <textarea name="description" id="" cols="30" rows="5" placeholder="Zet hier de descriptie"></textarea><br><br>
        <input type="file" class="btn btn-lg btn-block  " name="picture"><br>
        <button class="btn btn-lg btn-outline-warning btn-block white"<input name="submit" type="submit"">Uploaden</button>

    </form>
</main>
<?php
include_once('admin_defaults/admin_footer.php');
?>
</body>
</html>
