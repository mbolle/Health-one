<!doctype html>
<html lang="en">
<?php
include_once('admin_defaults/admin_head.php');
require_once ('../../Modules/categories.php');
require_once ('../../Modules/products.php');
global $toUpdateProductId;
$categories=getCategories();
$product=getProduct($toUpdateProductId);
?>
<body>
<?php
include_once (TEMPLATE_ROOT. 'admin_defaults/admin_menu.php');
?>
<main class='container'>
    <h1 class="text-danger">Update Product</h1>
    <form method="post">
        <label>Naam:</label><br>
        <input name="product-name" type="text" value="<?php foreach ($product as $data){echo $data->name;} ?>"><br>
        <label>Categorie</label><br>
        <select name="category-id" class="form-select" style="width: 25% !important; text-align: center !important; margin-left: 500px;">
            <option value="<?php foreach ($product as $data){echo $data->category_id;} ?>"><?php foreach ($product as $data){echo $data->category_name;} ?></option>
            <?php
            foreach ($categories as $category){
                echo "<option value='$category->id'>$category->name</option>";
            }
            ?>
        </select>
        <br>
        <label>Descriptie</label><br>
        <textarea  name="description" id="" cols="30" rows="5" ><?php foreach ($product as $data){echo $data->description;} ?></textarea><br>
        <button class="btn btn-lg btn-outline-warning btn-block white"<input name="submit" type="submit"">Update</button>
    </form>
</main>
<?php
include_once('admin_defaults/admin_footer.php');
?>
</body>
</html>