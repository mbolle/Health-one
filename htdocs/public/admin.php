<?php
include_once('../Classes/User.php');
include_once('../Classes/Product.php');
include_once('../Classes/Category.php');
include_once('../Classes/Time.php');
include_once('../Classes/Review.php');

require_once('../Modules/Contact.php');
require_once '../Modules/Database.php';
require_once('../Modules/Products.php');
require_once('../Modules/login.php');
require_once('../Modules/logout.php');
require_once('../Modules/Review.php');

global $params;
$products=getProductsToDisplay();

if(isset($params[1]) && empty($params[2])){
    if($params[1]=='admin'){

        include_once ('../Templates/admin/admin_home.php');
        if(isset($_POST['change'])){
            $toControlPassword=filter_input(INPUT_POST,'old-password',FILTER_SANITIZE_STRING);
            $newPassword=filter_input(INPUT_POST,'new-password',FILTER_SANITIZE_STRING);
            $userId=$_SESSION['user'][0]->id;
            if(!empty($toControlPassword) && !empty($newPassword)){
                if($toControlPassword==$_SESSION['user'][0]->password){
                    $changePassword=changePassword($userId,$newPassword);
                    sleep(0.4);
                    echo "<script>alert('Uw wachtwoord is succesvol gewijzegd')</script>";
                }
                else{
                    echo "<script>alert('Uw wachtwoord is niet correct')</script>";
                }
            }
            else{
                echo "<script>alert('Niet Alle velden zijn ingevuld')</script>";
            }

        }
    }
}

if(isset($params[2]) && empty($params[3])){
    if($params[2]=='management'){
        include_once ('../Templates/admin/admin_products.php');
    }
    if($params[2]=='display'){
        include_once ('../Templates/admin/admin_products.php');
    }
}

if(isset($params[3])){
    switch ($params[3]){
        case 'add':
            include_once ('../Templates/admin/addProduct.php');
            if(isset($_POST['submit'])){
                $toInsertProductName=filter_input(INPUT_POST,'product-name',FILTER_SANITIZE_STRING);
                $toInsertProductCategoryId=filter_input(INPUT_POST,'category',FILTER_SANITIZE_NUMBER_INT);
                $toInsertProductIngredients=filter_input(INPUT_POST,'ingredients',FILTER_SANITIZE_STRING);
                $toInsertProductDescription=filter_input(INPUT_POST,'description',FILTER_SANITIZE_STRING);
                $toInsertProductPicture=filter_input(INPUT_POST,'picture');
                $toInsertProductPrice=filter_input(INPUT_POST,'price',FILTER_SANITIZE_NUMBER_FLOAT);
                if(!empty($toInsertProductName) &&
                    !empty($toInsertProductCategoryId) &&
                    !empty($toInsertProductIngredients) &&
                    !empty($toInsertProductDescription) &&
                    !empty($toInsertProductPicture) &&
                    !empty($toInsertProductPrice)){
                    $toInsertProduct=addProduct($toInsertProductName,$toInsertProductCategoryId,$toInsertProductIngredients,$toInsertProductDescription,$toInsertProductPicture,$toInsertProductPrice);
                }
                else{
                    echo "<script>alert('Niet Alle velden zijn ingevuld! probeer nog een keer')</script>";
                }
            }
            break;
        case 'delete':
            $toDeleteProductId=$params[4];

            $toDeleteProductId=$params[4];
            if(isset($_POST['submit'])){
                $toDeleteProduct=removeProduct($toDeleteProductId);
                header("Location: /admin_products");
            }
            if(isset($_POST['cancel'])){
                header("Location: /admin/admin_products");
            }
            include_once ('../Templates/admin/deleteProduct.php');
            break;
        case 'update':
            $toUpdateProductId=$params[4];

            if(isset($_POST['submit'])){
                $toUpdateProductName=filter_input(INPUT_POST,'product-name',FILTER_SANITIZE_STRING);
                $toUpdateProductCategoryId=filter_input(INPUT_POST,'category-id',FILTER_SANITIZE_STRING);
                $toUpdateProductIngredients=filter_input(INPUT_POST,'ingredients',FILTER_SANITIZE_STRING);
                $toUpdateProductDescription=filter_input(INPUT_POST,'description',FILTER_SANITIZE_STRING);
                $toUpdateProductPrice=filter_input(INPUT_POST,'price',FILTER_SANITIZE_NUMBER_FLOAT);
                if(!empty($toUpdateProductName)&&
                    !empty($toUpdateProductCategoryId)&&
                    !empty($toUpdateProductIngredients)&&
                    !empty($toUpdateProductDescription)&&
                    !empty($toUpdateProductPrice)){
                    $toUpdateProduct=updateProduct($toUpdateProductName,$toUpdateProductCategoryId,$toUpdateProductIngredients,$toUpdateProductDescription,$toUpdateProductPrice,$toUpdateProductId);
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