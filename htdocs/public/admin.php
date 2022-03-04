<?php
include_once('../Classes/User.php');
include_once('../Classes/Product.php');
include_once('../Classes/Category.php');
include_once('../Classes/Time.php');
include_once('../Classes/Review.php');

require_once('../Modules/Categories.php');
require_once('../Modules/Contact.php');
require_once '../Modules/Database.php';
require_once('../Modules/Products.php');
require_once('../Modules/login.php');
require_once('../Modules/logout.php');
require_once('../Modules/register.php');
require_once('../Modules/Review.php');

global $params;
$products=getProductsToDisplay();

var_dump($params);

switch ($params[2]) {
    case 'products':
        $products = getProductsToDisplay();
        include_once ('../Templates/admin/admin_products.php');
        break;
    default:
        // User wants to change password
        if(isset($_POST['change'])){
            $toControlPassword=filter_input(INPUT_POST,'old-password',FILTER_SANITIZE_STRING);
            $newPassword=filter_input(INPUT_POST,'new-password',FILTER_SANITIZE_STRING);
            $userId=$_SESSION['user']->id;
            if(!empty($toControlPassword) && !empty($newPassword)){
                if ($toControlPassword==$_SESSION['user']->password) {
                    $changePassword=changePassword($userId,$newPassword);
                    sleep(0.4);
                    echo "<script>alert('Uw wachtwoord is succesvol gewijzegd')</script>";
                } else{
                    echo "<script>alert('Uw wachtwoord is niet correct')</script>";
                }
            } else{
                echo "<script>alert('Niet Alle velden zijn ingevuld')</script>";
            }
        }
        include_once ('../Templates/admin/admin_home.php');
        break;
}
die();
if(isset($params[1]) && empty($params[2])){
    if($params[1]=='admin'){
        include_once ('../Templates/admin/admin_home.php');

    }
}


if(isset($params[3])){
    switch ($params[3]){
        case 'add':
            if (isPost()) {
                if (fileupload()) {
                    saveProduct($_POST['name'], $_POST['category'], $_POST['description'], $message);
                    header("Location: /admin/admin_products");
                } else {
                    $categories = getCategorie();
                    include_once "../Templates/admin/addproduct.php";
                }
            } else {
                $categories = getCategorie();
                include_once  "../Templates/admin/addproduct.php";
            }
            break;


        case 'delete':
            $products = getProducts($_GET['id']);
            unlink('img/' . $product->picture);
            deleteProduct($_GET['if']);

            header("location:/admin/products");
            break;


        case 'update':
            $toUpdateProductId=$params[4];

            if(isset($_POST['submit'])){
                $toUpdateProductName=filter_input(INPUT_POST,'product_name',FILTER_SANITIZE_STRING);
                $toUpdateProductCategoryId=filter_input(INPUT_POST,'category-id',FILTER_SANITIZE_STRING);
                $toUpdateProductDescription=filter_input(INPUT_POST,'description',FILTER_SANITIZE_STRING);
                if(!empty($toUpdateProductName)&&
                    !empty($toUpdateProductCategoryId)&&
                    !empty($toUpdateProductDescription)){
                    $toUpdateProduct=updateProduct($toUpdateProductName,$toUpdateProductCategoryId,$toUpdateProductDescription,$toUpdateProductId);
                    header("Location: /admin/admin_product");
                }
                else{
                    echo "<script>alert('Niet alle velden zijn ingevuld !')</script>";
                }
            }
            include_once ('../Templates/admin/updateProduct.php');
            break;
    }
}