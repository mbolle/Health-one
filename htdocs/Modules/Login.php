<?php

function checkLogin():string
{
    global $pdo;
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST,'password');

    if($email!==null && $email!==false && !empty($password)) {
        $sql = 'SELECT * FROM user WHERE email = :e AND password = :p';
        $sth = $pdo->prepare($sql);
        $sth->bindParam(':e',$email);
        $sth->bindParam(':p',$password);
        $sth->setFetchMode(PDO::FETCH_CLASS,'User');
        $sth->execute();
        $user = $sth->fetch();

        if ($user!==false) {
            $_SESSION['user'] = $user;
            if ($_SESSION['user']->role=="admin") {
                return 'ADMIN';
            } else {
                return 'MEMBER';
            }
        }

        return 'FAILURE';
    }
    return 'INCOMPLETE';
}


function isMember():bool
{
    if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
        $user = $_SESSION['user'];
        if ($user->role == "member") {
            return true;
        } else {
            return false;
        }
    }
    return false;
}

function changePassword($id,$newPassword){
    try{
        global $pdo;
        $query=$pdo->prepare('UPDATE user SET password=:password WHERE id=:id');
        $query->bindParam('password',$newPassword);
        $query->bindParam('id',$id);
        $query->execute();
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}
