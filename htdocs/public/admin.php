<?php
global $params;

if(!isAdmin()){
    logout();
    header("location:/home.php");
}else{

    switch ($params[2]){

        case 'home':
            include_once "../Templates/admin/home.php";
            break;

        case 'products':

        case 'addProduct':

        case 'deleteProduct':

        default:
            include_once "../Templates/admin/home.php";
            break;
    }
}
