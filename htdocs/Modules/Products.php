<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getProducts(int $categoryId)
{
    global $pdo;
    $query=$pdo->prepare("SELECT * FROM product WHERE category_id = :id");
    $query->bindParam("id", $categoryId);
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_CLASS,"Product");
    return $result;
}

function getProduct(int $productId)
{
    global $pdo;
    try
    {
        $query = $pdo->prepare("SELECT * FROM product WHERE id = :id");
        $query->bindParam("id", $productId);
        $query->setFetchMode(PDO::FETCH_CLASS, 'Product');
        $query->execute();
    }catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $query->fetch();
}

function getProductsToDisplay(){
    try{
        global $pdo;
        $query=$pdo->prepare("SELECT product.* , category.name AS category_name FROM product JOIN category ON product.category_id=category.id");
        $query->execute();
        $products=$query->fetchAll(PDO::FETCH_CLASS);

        return $products;
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}

function getCategorie():array
{
    global $pdo;
    $categorie = $pdo->query('SELECT * FROM category')->fetchAll(PDO::FETCH_CLASS, 'Category');
    return $categorie;
}

function isPost()
{
    if( (isset($_POST['name'])) && (!empty($_POST['name'])) &&
        (isset($_POST['category'])) && (!empty($_POST['category'])) &&
        (isset($_POST['description'])) && (!empty($_POST['description'])) &&
        (isset($_FILES['fileToUpload']['tmp_name'])) && (!empty($_FILES['fileToUpload']['tmp_name'])) )
    {
        return true;
    } else
        return false;
}

function fileupload()
{
    global $message;

    $allowed = ['gif','png','jpg'];
    $filename = $_FILES['fileToUpload']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if (!in_array($ext,$allowed) || exif_imagetype($_FILES['fileToUpload']['tmp_name']) === false) {
        $message = "Sorry allen gif,png of jpg files toegestaan";
        return false;
    }
    $target_dir = "img/categories/". strtolower(getCategoryName((int)$_POST['category'])) ."/";
    $target_file = $_FILES["fileToUpload"]["name"];
    do {
        $target_file = $target_dir.md5($target_file).".$ext";
    } while (file_exists($target_file));

    if ($_FILES["fileToUpload"]["size"] > 500000) {
        $message = "Sorry, je bestand is te groot.";
        return false;
    }

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        return true;
    } else {
        $message = "Sorry, er was een probleem tijdens het uploaden van je bestand.";
        return false;
    }
}