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
}