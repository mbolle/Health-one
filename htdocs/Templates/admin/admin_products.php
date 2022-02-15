<!doctype html>
<html lang="en">
<?php
    include_once('admin_defaults/admin_head.php');
    include_once ('admin_defaults/admin_menu.php');

?>
<body>
<main class='container'>
<?php
include_once ('admin_defaults/admin_header.php');
include_once('admin_defaults/admin_menu.php');
?>
    <div class='p-4 p-md-5 mb-4 text-white rounded '>
        <div class='col-md-12 px-0'>
            <h1 class='display-4 fst-italic text-warning text-center'>Beheer</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="addproduct.php"><button class="btn btn-outline-warning text-dark btn-lg">Add</button></a>
        </div>
    </div>
    <br>
    <table class="table table-bordered">
        <tr>
            <th class="text-center">Foto</th>
            <th class="text-center">Naam product</th>
            <th class="text-center">Naam category</th>
            <th class="text-center">Details veranderen</th>
            <th class="text-center">Product verwijderen</th>
        </tr>
        <tbody>
        <!--        loop vanaf hier-->
        <?php
        foreach ($products as $product){
            echo"
            <tr>
            <td>
<!--                hier moet de image van de item-->
                <img class='w-25 h-25' src='$product->picture' alt='placeholder'>
            </td>
            <td>
<!--                hier moet de naam van het product-->
                <p>$product->name</p>
            </td>
            <td>
<!--                hier moert de prijs van het product-->
                <p>$product->category_name</p>
            </td>
            <td>
<!--                hier komt de button om te editen-->
                <a href='updateProduct.php/$product->id'><button class='btn btn-outline-primary'>Update</button></a>
            </td>
            <td>
<!--                hier komt de button om het product te deleten-->
                <a href='deleteProduct.php/$product->id'><button class='btn btn-outline-danger'>Delete</button></a>
            </td>
           </tr>";
        }
        ?>
        <!--        loop eindigt hier-->
        </tbody>
    </table>

</main>
<?php
include_once('admin_defaults/admin_footer.php');
?>
</body>
</html>