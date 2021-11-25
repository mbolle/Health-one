<?php
require '../Modules/Categories.php';
require '../Modules/Products.php';
require '../Modules/Database.php';
require '../Modules/Contact.php';
require '../Modules/Review.php';

$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "HealthOne";
$titleSuffix = "";

switch ($params[1]) {
    case 'categories':
        $titleSuffix = ' | Categories';
        $categories = getCategories();
        include_once "../Templates/categories.php";
        break;

    // All equipment in the category
    case 'category':
        $titleSuffix = ' | Category';
        if (isset($_GET['id'])) {
            $categoryId = $_GET['id'];
            $products = getProducts($categoryId);
            $name = getCategoryName($categoryId);
            include_once "../Templates/sportapparaten.php";
        }else{
            $titleSuffix = ' | Home';
            include_once "../Templates/home.php";
        }
        break;

// Specific equipment in the category
    case 'product':
        if (isset($_GET['id'])) {
            $productId = $_GET['id'];
            $product = getProduct($productId);
            $titleSuffix = ' | ' . $product->name;
            $name = getCategoryName($product->category_id);
            $reviewGiven = ['result' => NULL, 'message' => ''];
            if (isset($_POST['form-sort']) && $_POST['form-sort'] === 'review') {
                $reviewGiven = postReview($productId);
            }
            include_once "../Templates/sportapparaat_detail.php";
        }else{
            $titleSuffix = ' | Home';
            include_once "../Templates/home.php";
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
