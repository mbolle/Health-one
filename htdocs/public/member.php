<?php
global $params;

if (!isMember()) {
    logout();
    header("location: /home");
} else {

    switch ($params[2]) {

        case 'home':
            include_once "../Templates/member/member_home.php";
            break;

        case 'products':
        case 'profile':
        case 'editprofile':
        case 'changepassword':
    }
}