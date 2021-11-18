<?php
require '../Modules/Categories.php';
require '../Modules/Products.php';
require '../Modules/Database.php';
require '../Modules/Contact.php';

$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "HealthOne";
$titleSuffix = "";

switch ($params[1]) {
    case 'categories':
        $titleSuffix = ' | Categories';

        if (isset($_GET['category_id'])) {
            $categoryId = $_GET['category_id'];
            $products = getProducts($categoryId);
            $name = getCategoryName($categoryId);
            var_dump($products);

            if (isset($_GET['product_id'])) {
                $productId = $_GET['product_id'];
                $product = getProduct($productId);
                $titleSuffix = ' | ' . $product->name;
                if(isset($_POST['name']) && isset($_POST['review'])) {
                    saveReview($_POST['name'],$_POST['review']);
                    $reviews=getReviews($productId);
                }
                // TODO Zorg dat je hier de product pagina laat zien
            } else {
                // TODO Zorg dat je hier alle producten laat zien van een categorie
                include_once "../Templates/product.php";
            }
        } else {
            // TODO Toon de categorieen
            $categories = getCategories();
            include_once "../Templates/categories.php";
        }
        break;

    case 'contact':
        $titleSuffix = ' | Home';
        include_once "../Templates/contact.php";
        break;

    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}

function getTitle() {
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
