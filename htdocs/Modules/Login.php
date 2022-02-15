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

function isAdmin():bool
{
    if(isset($_SESSION['user'])&&!empty($_SESSION['user']))
    {
        $user=$_SESSION['user'];
        if ($user->role == "admin")
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    return false;
}

function getUser($email,$password){
    try{
        global $pdo;
        $query=$pdo->prepare('SELECT * FROM user WHERE email=:email AND password=:password');
        $query->bindParam('email',$email);
        $query->bindParam('password',$password);
        $query->execute();
        $user=$query->fetchAll(PDO::FETCH_CLASS);

        return $user;
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
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